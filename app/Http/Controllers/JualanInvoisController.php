<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualanInvoisController extends Controller
{

    public function jana_invois()
    {
        return view('jualan.invois.jana_invois',[]);

    }
    public function senarai_invois()
    {
        return view('jualan.invois.senarai_invois',[]);

    }
    public function nota_debit_nota_kredit()
    {
        return view('jualan.invois.nota_debit_nota_kredit',[]);

    }
    public function kelulusan()
    {
        return view('jualan.invois.kelulusan',[]);

    }
    public function invois_lama()
    {
        return view('jualan.invois.invois_lama',[]);

    }
    public function invois()
    {
        return view('jualan.invois.invois',[]);

    }
    public function senarai_hitam()
    {
        return view('jualan.invois.senarai_hitam',[]);

    }
}