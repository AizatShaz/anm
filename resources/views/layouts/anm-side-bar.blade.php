
<style>
    .risda-side {
        /* margin-top: 225px; */
        /* padding: 20px; */
        /* width: 350px; */
        /* position: fixed; */
        /* overflow-y: auto;
        top: 0;
        bottom: 0; */
        background-color: #009640;
        color: white;
    }

    /* .nav-link-text {
        color: white;
    }

    .nav-link-text.active {
        color: white;
        background-color: #009640;
    } */

</style>
<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
    }
</script>
<nav class="navbar navbar-light navbar-vertical  navbar-expand-xl" >
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse" style="box-shadow:inset 0 0 10px #000000; ">
        <div class="navbar-vertical-content scrollbar" id="checklim" >
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav"> 
                <div style="background: #2CABE1; width: 100%">
                    <div class="row mt-4" >
                        <div class="col">
                            <h5 class="text-white text-center">Selamat Datang !</h5>
                        </div>
                    </div>
                    <div class="row">
                                        
                        <div class="col mb-3" style="align-content: center">
                            <img style="padding-left: 40px" id="rcorners" src="nuklear_logo.png" alt="" width="80">
                        </div>
                        <div class="col mb-3">
                            <h3 class="h5 text-white text-center"><strong>{{ Auth::user()->name }}</strong></h3>
                        </div>
                    </div>
                </div>
                <div  style="background: #ffff">
                    <li class="nav-item mx-3 mx-md-0">
                        <!-- label-->
                        {{-- <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                             <div class="col-auto navbar-vertical-label text-white">
                                Menu
                            </div>
                            <div class="col ps-0">
                                <hr class="mb-0 navbar-vertical-divider" />
                            </div> 
                        </div> --}}
                        <a class="nav-link py-0" href="/dashboard" role="button" style="color: #">
                            <div class="d-flex align-items-center nav-link-side px-0" >
                                <img src="/home.png" alt="" width="27px"><span class="px-3" style="padding-left: 800px; color: black; padding-block: black"> UTAMA</span>
                            </div>
                        </a>
                        <!-- parent pages--><a style="background-color: #113854" class="nav-link dropdown-indicator" href="#LOL222" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">MODUL JUALAN</span>
                            </div>
                        </a>
                        <ul class="nav collapse false" id="LOL222">
                                                   <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL1" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                                    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">PERMOHONAN SEBUTHARGA</span>
                                                    </div>
                                                </a>
                                                <ul class="nav collapse false" id="LOL1">
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/permohonan_sebutharga/permohonan_sebutharga">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1"> Permohonan Sebutharga</span></div>
                                                    </a>
                                                    <!-- more inner pages--></li>
                                                </ul>
                                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL3" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                                    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1"> SEBUTHARGA</span>
                                                    </div>
                                                    </a>
                                                    <ul class="nav collapse false" id="LOL3">
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/sebutharga/sebutharga_rfq">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sebutharga RFQ</span>
                                                    </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/sebutharga/sebutharga">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sebutharga</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/sebutharga/senarai_sebutharga">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Senarai Sebutharga</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/sebutharga/kelulusan">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kelulusan</span>
                                                    </div>
                                                    </a>
                                                        <!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/sebutharga/sebutharga_lama">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sebutharga Lama</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    </li>
                                                </ul>
                                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL2" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                                    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">PESANAN</span>
                                                </div>
                                                </a>
                                                <ul class="nav collapse false" id="LOL2">
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pesanan/jana_pesanan">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jana Pesanan</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pesanan/kelulusan_pesanan">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kelulusan Pesanan</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pesanan/pesanan_berjadual_perjanjian">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pesanan Berjadual/Perjanjian</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pesanan/kelulusan_pesanan_berjadual">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kelulusan Pesanan Berjadual</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pesanan/senarai_pesanan">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Senarai Pesanan</span></div>
                                                </a><!-- more inner pages--></li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pesanan/jana_pro_forma">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jana Pro Forma</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pesanan/senarai_pro_forma">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Senarai Pro Forma</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pesanan/laporan_pro_forma">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Laporan Pro Forma</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pesanan/pro_forma_invois">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pro Forma Invois</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pesanan/pro_forma_tiada invois">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pro Forma Tiada Invois</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                </ul>
                                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL4" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                                    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">KAD KERJA</span>
                                                    </div>
                                                </a>
                                                <ul class="nav collapse false" id="LOL4">
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/jana_kad_kerja">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jana Kad Kerja</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/kad_kerja_masuk">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja Masuk</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/kad_kerja_masuk">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja Masuk</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/irradiation">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja Irradiation</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/calibration">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja Calibration</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/external">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja External</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/fabrication">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja Fabrication</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/personal_dosimeter">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja Personal Dosimeter</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/production">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja Production</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/repair">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja Repair</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/testing">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja Testing</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kad_kerja/perkhidmatan_sewa">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kad Kerja Perkhidmatan Sewa</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li></ul>
                                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL6" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                                <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">INVOIS</span>
                                                </div>
                                                </a>
                                                <ul class="nav collapse false" id="LOL6">
                                                <li class="nav-item"><a class="nav-link" href="/jualan/invois/jana_invois">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-text ps-1">Jana Invois</span>
                                                    </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/invois/senarai_invois">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Senarai Invois</span>
                                                    </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/invois/nota_debit_nota_kredit">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Nota Debit/Nota Kredit</span>
                                                    </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/invois/nota_debit_nota_kredit">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Nota Debit/Nota Kredit</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/invois/kelulusan">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kelulusan</span>
                                                </div>
                                                </a><!-- more inner pages--></li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/invois/jana_invois_kad_kerja_lama">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jana Invois (Kad Kerja Lama)</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/invois/invois">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invois</span>
                                                </div>
                                                </a>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/invois/invois_lama">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invois Lama</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/invois/senarai_hitam">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Senarai Hitam</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                </ul>
                                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL7" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                                <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">LAPORAN</span>
                                                </div>
                                                </a>
                                                <ul class="nav collapse false" id="LOL7">
                                                <li class="nav-item"><a class="nav-link" href="/jualan/laporan/penyata_invois">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Penyata Invois</span>
                                                    </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/laporan/akaun_subsidiari_abt">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Akaun Subsidiari ABT</span>
                                                    </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/laporan/nota_debit_nota_kredit">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Nota Debit/Nota Kredit</span>
                                                    </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/laporan/akaun_belum_terima">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Akaun Belum Terima</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/laporan/prestasi_pusat_khidmat">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Prestasi Pusat Khidmat</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/laporan/semakan_kutipan">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Semakan Kutipan</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/laporan/prestasi_bulanan">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Prestasi Bulanan</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/laporan/prestasi_pelanggan">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Prestasi Pelanggan</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/laporan/penyata_suku_tahunan">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Penyata Suku Tahunan</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/laporan/statistik_penggunaan">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Statisktik Penggunaan</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                </ul>
                                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL8" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                                <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">NOTA HANTARAN</span>
                                                </div>
                                                </a>
                                                <ul class="nav collapse false" id="LOL8">
                                                <li class="nav-item"><a class="nav-link" href="/jualan/nota_hantaran/jana_nota_hantaran">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jana Nota Hantaran</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/nota_hantaran/nota_hantaran">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Nota Hantaran</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/nota_hantaran/nota_hantaran_lama">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Nota Hantaran Lama</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                </ul>
                                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL9" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                                    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">PEMBAYARAN</span>
                                                    </div>
                                                </a>
                                                <ul class="nav collapse false" id="LOL9">
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/pembayaran/bayaran">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bayaran</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/pembayaran/kemaskini_bayaran">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kemaskini Bayaran</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/pembayaran/bayaran_invois_lama">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bayaran Invois Lama</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/pembayaran/notis_pemberitahuan_resit">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notis Pemberitahu Resit</span>
                                                    </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/pembayaran/senarai_import">
                                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Senarai Import</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link" href="/jualan/pembayaran/import">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Import</span>
                                                    </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/jualan/pembayaran/lebihan_bayaran">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lebihan Bayaran</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                </ul>
                                                
                                                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL5" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                                    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">KOD</span>
                                                    </div>
                                                </a>
                                                <ul class="nav collapse false" id="LOL5">
                                                <li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_notifikasi">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Notifikasi</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/spp_pusat_khidmat_servis">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Servis Pusat Khidmat</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/spp_profil_harga_servis">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profil Harga</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="/psm_biodata">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profil Kakitangan</span>
                                                </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/spp_profil_syarikat">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profil Syarikat</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/spp_pelanggan_syarikat">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pelanggan</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/pelanggan_aktif">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pelanggan Aktif</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/pembekal">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pembekal</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_bank">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Bank</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_bayaran">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Bayaran</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_pusat_khidmat">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Pusat Khidmat</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/kod_sijil_iso">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Iso</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/kod_status_syarikat">
                                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Status Syarikat</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/kod_negeri">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Negeri</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/kod_daerah">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Daerah</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/kod_proses">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Proses</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/kod_proses_config">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Proses Config</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/setup_format_sijil">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Setup Format Sijil</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_template_sijil">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Template Sijil</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/semak_stok">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Semak Stok</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/daftar_alat">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Daftar Alat</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/batal_transaksi">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Batal Transaksi</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_notifikasi_abt">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Notifikasi ABT</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/tukar_staf">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tukar Staf</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/pindah_milik_syarikat">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pindah Milik Syarikat</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/kod/hapus_pro_forma">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hapus Pro Forma</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            </ul>
                                            <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL10" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">SETUP</span>
                                            </div>
                                            </a>
                                            <ul class="nav collapse false" id="LOL10">
                                            <li class="nav-item"><a class="nav-link" href="/jualan/setup/kategori">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kategori</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/setup/pautan_menu">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pautan Menu</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/setup/kawalan_menu">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kawalan Menu</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="/jualan/setup/salin_kawalan">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Salin Kawalan</span>
                                            </div>
                                            </a>
                                            <!-- more inner pages-->
                                            </li>
                                            </ul>
                        </ul>
 
                    </div>
                    <div style="padding-top: 50px; background: #ffff" >
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="col d-grid gap-2">
                                <button type="submit" class="btn btn-light btn-logout">Log Keluar</button>
                            </div>
                        </form>
                </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // (function($) {
    //     var $window = $(window),
    //         $html = $('#checklim');

    //     $window.resize(function resize() {
    //         if ($window.width() < 601) {
    //             return $html.addClass('scrollbar');
    //         }

    //         $html.removeClass('scrollbar');
    //     }).trigger('resize');
    // })(jQuery);
</script>*