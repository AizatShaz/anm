<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualanKadKerjaController extends Controller
{

    public function jana_kad_kerja()
    {
        return view('jualan.kad_kerja.jana_kad_kerja',[]);

    }
    public function kad_kerja_masuk()
    {
        return view('jualan.kad_kerja.kad_kerja_masuk',[]);

    }
    public function kad_kerja_lama()
    {
        return view('jualan.kad_kerja.kad_kerja_lama',[]);

    }
}