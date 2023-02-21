<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NexmoController extends Controller
{
    public function index()
    {
        return view('nexmo');
    }

    public function store(Request $request)
    {
        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to' => $request->no_hp,
            'from' => 'Hilmi Purdimen',
            'text' => $request->pesan,
        ]);

        return back();
    }
} 
