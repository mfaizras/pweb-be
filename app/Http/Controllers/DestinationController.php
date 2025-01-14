<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DestinationCollection;
use App\Http\Resources\ResponseResource;
use App\Http\Resources\DestinationResource;
use Exception;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'data' => Destination::where('is_available',true)->paginate(8)
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
    public function store(Request $request)
    {
        try{
            $destination = Destination::create($request->all());
            return new ResponseResource(200,'success',new DestinationResource($destination));
        } catch(Exception $e){
            return new ResponseResource(500,'error',$e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        return new ResponseResource(200,'success',new DestinationResource($destination));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
