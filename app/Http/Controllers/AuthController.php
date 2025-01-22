<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 400,
                'status' => 'error',
                'message' => $validator->errors()
            ],400);
        }

        try{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->string('password')),
            ]);
            // event(new Registered($user));
        } catch (Exception $e){
            return response()->json([
                'code' => 400,
                'status' => 'error',
                'message' => $e
            ],400);
        }

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'Registration Success, Please login to continue'
        ]);
    }

    public function login(Request $request){
       $validator = Validator::make($request->all(),[
            'email'=>'required|string|email',
            'password'=>'required|min:8'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 400,
                'status' => 'error',
                'message' => $validator->errors()
            ],400);
        }

        $user = User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return response()->json([
                'code' => 401,
                'status' => 'error',
                'message' => 'Invalid Credentials'
            ],401);
        }
        $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'Login Berhasil',
            'token' => $token,
            'data' => $user,
        ]);
    }

    public function logout(){
        auth()->user()->tokens()->delete();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'Berhasil Logout',
        ]);
    }

    public function user(Request $request){
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'User Didapatkan!',
            'data' => auth()->user(),
        ]);
    }
}
