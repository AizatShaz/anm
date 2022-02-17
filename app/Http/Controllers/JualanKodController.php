<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualanKodController extends Controller
{

    public function kod_notifikasi()
    {
        return view('jualan.kod.kod_notifikasi',[]);

    }
    public function servis_pusat_khidmat()
    {
        return view('jualan.kod.servis_pusat_khidmat',[]);

    }
    public function profil_harga()
    {
        return view('jualan.kod.profil_harga',[]);

    }
    public function profil_kakitangan()
    {
        return view('jualan.kod.profil_kakitangan',[]);

    }
    public function profil_syarikat()
    {
        return view('jualan.kod.profil_syarikat',[]);

    }
    public function pelanggan()
    {
        return view('jualan.kod.pelanggan',[]);

    }
    public function pelanggan_aktif()
    {
        return view('jualan.kod.pelanggan_aktif',[]);

    }
    public function pembekal()
    {
        return view('jualan.kod.pembekal',[]);

    }
    public function kod_bank()
    {
        return view('jualan.kod.kod_bank',[]);

    }
    public function kod_pusat_khidmat()
    {
        return view('jualan.kod.kod_pusat_khidmat',[]);

    }
    public function kod_iso()
    {
        return view('jualan.kod.kod_iso',[]);

    }
    public function kod_status_syarikat()
    {
        return view('jualan.kod.kod_status_syarikat',[]);

    }
    public function kod_negeri()
    {
        return view('jualan.kod.kod_negeri',[]);

    }
    public function kod_daerah()
    {
        return view('jualan.kod.kod_daerah',[]);

    }
    public function kod_proses()
    {
        return view('jualan.kod.kod_proses',[]);

    }
    public function kod_proses_config()
    {
        return view('jualan.kod.kod_proses_config',[]);

    }
    public function setup_format_sijil()
    {
        return view('jualan.kod.setup_format_sijil',[]);

    }
    public function kod_template_sijil()
    {
        return view('jualan.kod.kod_template_sijil',[]);

    }
    public function semak_stok()
    {
        return view('jualan.kod.semak_stok',[]);

    }
    public function daftar_alat()
    {
        return view('jualan.kod.daftar_alat',[]);

    }
    public function batal_transaksi()
    {
        return view('jualan.kod.batal_transaksi',[]);

    }
    public function kod_notifikasi_abt()
    {
        return view('jualan.kod.kod_notifikasi_abt',[]);

    }
    public function tukar_staf()
    {
        return view('jualan.kod.tukar_staf',[]);

    }
    public function pindah_milik_syarikat()
    {
        return view('jualan.kod.pindah_milik_syarikat',[]);

    }
    public function hapus_pro_forma()
    {
        return view('jualan.kod.hapus_pro_forma',[]);

    }

}
