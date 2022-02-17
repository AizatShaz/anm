<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualanKadKerjaController extends Controller
{

    public function kategori()
    {
        return view('jualan.setup.kategori',[]);

    }
    public function pautan_menu()
    {
        return view('jualan.setup.pautan_menu',[]);

    }
    public function kawalan_menu()
    {
        return view('jualan.setup.kawalan_menu',[]);

    }
    public function salin_kawalan()
    {
        return view('jualan.setup.salin_kawalan',[]);

    }
}