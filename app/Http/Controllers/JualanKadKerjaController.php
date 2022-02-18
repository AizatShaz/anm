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
    public function irradiation()
    {
        return view('jualan.kad_kerja.irradiation',[]);

    }
    public function calibration()
    {
        return view('jualan.kad_kerja.calibration',[]);

    }
    public function external()
    {
        return view('jualan.kad_kerja.external',[]);

    }
    public function fabrication()
    {
        return view('jualan.kad_kerja.fabrication',[]);

    }
    public function personal_dosimeter()
    {
        return view('jualan.kad_kerja.personal_dosimeter',[]);

    }
    public function production()
    {
        return view('jualan.kad_kerja.production',[]);

    }
    public function repair()
    {
        return view('jualan.kad_kerja.repair',[]);

    }
    public function testing()
    {
        return view('jualan.kad_kerja.testing',[]);

    }
    public function perkhidmatan_sewa()
    {
        return view('jualan.kad_kerja.perkhidmatan_sewa',[]);

    }
    
}