<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualanPembayaranController extends Controller
{

    public function bayaran()
    {
        return view('jualan.pembayaran.bayaran',[]);

    }
    public function kemaskini_bayaran()
    {
        return view('jualan.pembayaran.kemaskini_bayaran',[]);

    }
    public function bayaran_invois_lama()
    {
        return view('jualan.pembayaran.bayaran_invois_lama',[]);

    }
    public function notis_pemberitahuan_resit()
    {
        return view('jualan.pembayaran.notis_pemberitahuan_resit',[]);

    }
    public function senarai_import()
    {
        return view('jualan.pembayaran.senarai_import',[]);

    }
    public function import()
    {
        return view('jualan.pembayaran.import',[]);

    }
    public function lebihan_bayaran()
    {
        return view('jualan.pembayaran.lebihan_bayaran',[]);

    }
    

}
