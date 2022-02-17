<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualanNotaHantaranController extends Controller
{

    public function jana_nota_hantaran()
    {
        return view('jualan.nota_hantaran.jana_nota_hantaran',[]);

    }
    public function nota_hantaran()
    {
        return view('jualan.nota_hantaran.nota_hantaran',[]);

    }
    public function nota_hantaran_lama()
    {
        return view('jualan.nota_hantaran.nota_hantaran_lama',[]);

    }
}