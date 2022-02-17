<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualanPesananController extends Controller
{

    public function jana_pesanan()
    {
        return view('jualan.pesanan.jana_pesanan',[]);

    }
    public function kelulusan_pesanan()
    {
        return view('jualan.pesanan.kelulusan_pesanan',[]);

    }
    public function pesanan_berjadual_perjanjian()
    {
        return view('jualan.pesanan.pesanan_berjadual_perjanjian',[]);

    }
    public function kelulusan_pesanan_berjadual()
    {
        return view('jualan.pesanan.kelulusan_pesanan_berjadual',[]);

    }
    public function senarai_pesanan()
    {
        return view('jualan.pesanan.senarai_pesanan',[]);

    }
    public function jana_pro_forma()
    {
        return view('jualan.pesanan.jana_pro_forma',[]);

    }
    public function senarai_pro_forma()
    {
        return view('jualan.pesanan.senarai_pro_forma',[]);

    }
    public function pro_forma_invois()
    {
        return view('jualan.pesanan.pro_forma_invois',[]);

    }
    public function pro_forma_tiada_invois()
    {
        return view('jualan.pesanan.pro_forma_tiada_invois',[]);

    }
    public function laporan_pro_forma()
    {
        return view('jualan.pesanan.laporan_pro_forma',[]);

    }

}
