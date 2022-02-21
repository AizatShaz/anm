
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
          table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 80%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
      min-width: 100px;
      max-width: 150px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>e-CLIENT</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/assets/img/favicons/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/assets/img/favicons/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/assets/img/favicons/favicon-16x16.png") }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("/assets/img/favicons/favicon.ico") }}">
    <link rel="manifest" href="{{ asset("/assets/img/favicons/manifest.json") }}">
    <meta name="msapplication-TileImage" content="{{ asset("/assets/img/favicons/mstile-150x150.png") }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset("/assets/js/config.js") }}"></script>
    <script src="{{ asset("/vendors/overlayscrollbars/OverlayScrollbars.min.js") }}"></script>



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset("/vendors/fullcalendar/main.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/vendors/flatpickr/flatpickr.min.css") }}" rel="stylesheet">
    <link rel="preconnect" href="{{ asset("https://fonts.gstatic.com") }}">
    <link href="{{ asset("https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap") }}" rel="stylesheet">
    <link href="{{ asset("/vendors/overlayscrollbars/OverlayScrollbars.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/theme-rtl.min.css") }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset("/assets/css/theme.min.css") }}" rel="stylesheet" id="style-default">
    <link href="{{ asset("/assets/css/user-rtl.min.css") }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset("/assets/css/user.min.css") }}" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">

        
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>


          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">

              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

            </div><a class="navbar-brand" href="index.html">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="https://www.majalahsains.com/wp-content/uploads/2012/05/Logo-Agensi-Nuklear-Malaysia.png" alt="" width="40" /><span class="font-sans-serif"></span>
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link" href="#dashboard" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Laman Utama</span>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  {{-- <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Kad Kerja
                    </div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div> --}}
                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#LOL1" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">PERMOHONAN SEBUTHARGA</span>
                  </div>
                </a>
                <ul class="nav collapse false" id="LOL1">
                  <li class="nav-item"><a class="nav-link" href="/jualan/permohonan_sebutharga/permohonan_sebutharga">
                      <div class="d-flex align-items-center"><span class="nav-link-text ps-1"> Permohonan Sebutharga</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
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
                  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Senarai Pesanan</span>
                  </div>
                </a>
                <!-- more inner pages-->
              </li>
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
    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span class="nav-link-text ps-1">Kad Kerja</span>
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
  </li>
</ul>
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
                </a>
                <!-- more inner pages-->
              </li>
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
                    <li class="nav-item"><a class="nav-link" href="/jualan/kod/servis_pusat_khidmat">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Servis Pusat Khidmat</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/jualan/kod/profil_harga">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profil Harga</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/jualan/kod/profil_kakitangan">
                      <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profil Kakitangan</span>
                      </div>
                    </a>
                    <!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/jualan/kod/profil_syarikat">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profil Syarikat</span>
                    </div>
                  </a>
                  <!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="/jualan/kod/pelanggan">
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
    <li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_iso">
      <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Iso</span>
      </div>
    </a>
    <!-- more inner pages-->
  </li>
  <li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_status_syarikat">
    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Status Syarikat</span>
    </div>
  </a>
  <!-- more inner pages-->
</li>
<li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_negeri">
  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Negeri</span>
  </div>
</a>
<!-- more inner pages-->
</li>
<li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_daerah">
  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Daerah</span>
  </div>
</a>
<!-- more inner pages-->
</li>
<li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_proses">
  <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kod Proses</span>
  </div>
</a>
<!-- more inner pages-->
</li>
<li class="nav-item"><a class="nav-link" href="/jualan/kod/kod_proses_config">
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
            </div>
          </div>
        </nav>
        <div class="content">
          
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="#index.html">
              {{-- <div class="d-flex align-items-center"><img class="me-2" src="{{ asset("assets/img/icons/spot-illustrations/falcon.png") }}" alt="" width="40" /><span class="font-sans-serif">falcon</span>
              </div> --}}
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">

                {{-- <div class="search-box" data-list='{"valueNames":["title"]}'>
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                    <input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>

                  </form>
                  <button class="btn-close position-absolute end-0 top-50 translate-middle shadow-none p-1 me-1 fs--2" type="button" data-bs-dismiss="search"></button>
                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>

                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>

                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>

                      <hr class="bg-200" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                          <div class="flex-1 fs--1 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                          <div class="flex-1 fs--1 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/product/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                          <div class="flex-1 fs--1 title">Most popular products</div>
                        </div>
                      </a>

                      <hr class="bg-200" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="assets/img/products/3-thumb.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">iPhone</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Falcon v1.8.2</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>

                      <hr class="bg-200" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online me-2">
                            <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Anna Karinina</h6>
                            <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Antony Hopkins</h6>
                            <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Emma Watson</h6>
                            <p class="fs--2 mb-0 d-flex">Google</p>
                          </div>
                        </div>
                      </a>

                    </div>
                    <div class="text-center mt-n3">
                      <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div> --}}
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2">
                  <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                </div>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>

              </li> --}}
              {{-- <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="assets/img/logos/oxford.png" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="assets/img/team/10.jpg" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>

                            </div>
                          </a>

                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
                  </div>
                </div>

              </li> --}}
              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{ asset("assets/img/team/3-thumb.png") }}" alt="" />

                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    {{-- <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a> --}}

                    {{-- <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item" href="#">
                      <form method="POST" action="http://127.0.0.1:8001/logout">
                      <input type="hidden" name="_token" value="gJGgYluVBDqiJXjrwH8wQR3AI349qKTGZOMQVX8Q">  
                      <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://127.0.0.1:8001/logout" onclick="event.preventDefault();
                                          this.closest('form').submit();">Log Out</a>
                  </form></a>
                    {{-- <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a> --}}
                  </div>
                </div>
              </li>
            </ul>
          </nav>
               
          {{-- @yield('jana_kad_kerja.index') --}}
          @yield('content')
          {{-- @yield('jana_kad_kerja.maklumatPesanan') --}}


          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600"><span class="d-none d-sm-inline-block"></span><br class="d-sm-none" /> 2021 &copy;</p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.2.0</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div>
                <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-name">Name</label>
                    <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-email">Email address</label>
                    <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                  </div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-password">Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
                    </div>
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" />
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                    <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                  </div>
                </form>
                <div class="position-relative mt-5">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content border-0 vh-100 scrollbar-overlay">
          <div class="modal-header modal-header-settings bg-shape">
            <div class="z-index-1 py-1 light">
              <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
              <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
            </div>
            <button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-card" id="themeController">
            <h5 class="fs-0">Color Scheme</h5>
            <p class="fs--1">Choose the perfect color mode for your app.</p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="{{ asset("assets/img/generic/falcon-mode-default.jpg") }}" alt=""/></span><span class="label-text">Light</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="{{ asset("assets/img/generic/falcon-mode-dark.jpg") }}" alt=""/></span><span class="label-text"> Dark</span></label>
                </div>
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="{{ asset("assets/img/icons/left-arrow-from-left.svg") }}" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">RTL Mode</h5>
                  <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1" href="{{ asset("documentation/customization/configuration.html") }}">RTL Documentation</a>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" />
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="{{ asset("assets/img/icons/arrows-h.svg") }}" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">Fluid Layout</h5>
                  <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1" href="{{ asset("documentation/customization/configuration.html") }}">Fluid Documentation</a>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" />
              </div>
            </div>
            <hr />
            <div class="d-flex align-items-start"><img class="me-2" src="{{ asset("assets/img/icons/paragraph.svg") }}" width="20" alt="" />
              <div class="flex-1">
                <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-page-url="modules/components/navs-and-tabs/vertical-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-vertical">Vertical</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-page-url="modules/components/navs-and-tabs/top-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-top">Top</label>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-page-url="modules/components/navs-and-tabs/combo-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-combo">Combo</label>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
            <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
            <p> <a class="fs--1" href="{{ asset("modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles") }}">See Documentation</a></p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="{{ asset("assets/img/generic/default.png") }}" alt="" /><span class="label-text"> Transparent</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="{{ asset("assets/img/generic/inverted.png") }}" alt="" /><span class="label-text"> Inverted</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="{{ asset("assets/img/generic/card.png") }}" alt="" /><span class="label-text"> Card</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="{{ asset("assets/img/generic/vibrant.png") }}" alt="" /><span class="label-text"> Vibrant</span></label>
                </div>
              </div>
            </div>
            <div class="text-center mt-5"><img class="mb-4" src="{{ asset("assets/img/icons/spot-illustrations/47.png") }}" alt="" width="120" />
              <h5>Like What You See?</h5>
              <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="btn btn-primary" href="{{ asset("https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/") }}" target="_blank">Purchase</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('assets/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
  </body>

</html>