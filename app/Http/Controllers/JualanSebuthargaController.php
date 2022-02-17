<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualanSebuthargaController extends Controller
{

    public function sebutharga_rfq()
    {
        return view('jualan.sebutharga.sebutharga_rfq',[]);

    }
    public function sebutharga()
    {
        return view('jualan.sebutharga.sebutharga',[]);

    }
    public function senarai_sebutharga()
    {
        return view('jualan.sebutharga.senarai_sebutharga',[]);

    }
    public function kelulusan()
    {
        return view('jualan.sebutharga.kelulusan',[]);

    }
    public function sebutharga_lama()
    {
        return view('jualan.sebutharga.sebutharga_lama',[]);

    }
}