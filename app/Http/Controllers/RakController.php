<?php

namespace App\Http\Controllers;

Use App\Barang;     
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RakController extends Controller
{
    public function index($id)
    {
       $barangs = Barang::Where('katagori_id', $id)->with('brand','satuan')->get();

       return view('barang.databarang.index', compact('barangs'));
    }
}
