<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function destination(){
        $destinations = Destination::where('is_available',true)->get();
        return view('destination',[
            'destinations' => $destinations
        ]);
    }
}
