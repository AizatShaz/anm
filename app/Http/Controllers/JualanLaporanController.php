<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualanLaporanController extends Controller
{

    public function penyata_invois()
    {
        return view('jualan.laporan.penyata_invois',[]);

    }
    public function akaun_subsidiari()
    {
        return view('jualan.laporan.akaun_subsidiari',[]);

    }
    public function nota_debit_nota_kredit()
    {
        return view('jualan.laporan.nota_debit_nota_kredit',[]);

    }
    public function akaun_belum_terima()
    {
        return view('jualan.laporan.akaun_belum_terima',[]);

    }
    public function prestasi_pusat_khidmat()
    {
        return view('jualan.laporan.prestasi_pusat_khidmat',[]);

    }
    public function semakan_kutipan()
    {
        return view('jualan.laporan.semakan_kutipan',[]);

    }
    public function prestasi_bulanan()
    {
        return view('jualan.laporan.prestasi_bulanan',[]);

    }
    public function prestasi_pelanggan()
    {
        return view('jualan.laporan.prestasi_pelanggan',[]);

    }
    public function penyata_suku_tahunan()
    {
        return view('jualan.laporan.penyata_suku_tahunan',[]);

    }
    public function statistik_penggunaan()
    {
        return view('jualan.laporan.statistik_penggunaan',[]);

    }
    

}
