<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use Exception;
use App\Models\Order;
use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'Order Berhasil Didapatkan',
            'data' => OrderResource::collection(auth()->user()->orders),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Destination $destination, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'amount'=>'required|integer',
            'payment_id'=>'required|integer|exists:payments,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 400,
                'status' => 'error',
                'message' => $validator->errors()
            ],400);
        }

        $data = $request->all();

        $data['destination_id'] = $destination->id;
        $data['user_id'] = auth()->user()->id;
        $data['total'] = $destination->price * $data['amount'];
        $data['trx_id'] = $this->generateTrxId($destination);

        try{
            $order = Order::create($data);

            return response()->json([
                'code' => 200,
                'status' => 'success',
                'message' => 'Berhasil Dibuat!',
                'data' => $order,
            ]);
        } catch (Exception $e){
            return response()->json([
                'code' => 500,
                'status' => 'error',
                'message' => 'Error!',
                'data' => $e->getMessage(),
            ],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        if(auth()->user()->id !== $order->user_id){
            return response()->json([
                'code' => 403,
                'status' => 'error',
                'message' => 'Forbidden',
            ],403);
        }
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'Invoice Berhasil Didapatkan',
            'data' => new OrderResource($order),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function generateTrxId(Destination $destination){
        $user = auth()->user();
        $randomString = now()->format('Ymd');
        $randomString .= $destination->id;
        $randomString .= $user->id;
        $randomString .= count($user->orders)+1;

        $minus = strlen($randomString);

        $randomString .= Str::upper(Str::random(15-$minus));

        return $randomString;
    }
}
