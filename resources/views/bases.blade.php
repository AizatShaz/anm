<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>ANM | e-Client</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    {{-- <link href="vendors/dropzone/dropzone.min.css" rel="stylesheet" /> --}}
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="/assets/js/config.js"></script>
    <script src="/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {{-- <script src="vendors/dropzone/dropzone.min.js"></script> --}}
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}

    <script src="/assets/js/flatpickr.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css"
        rel="stylesheet">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="/vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="/vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="/vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <link href="/vendors/fullcalendar/main.min.css" rel="stylesheet">
    <link href="/vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="/vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="/assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="/assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="/assets/css/user.min.css" rel="stylesheet" id="user-style-default">

    <script>
        var APP_URL = {!! json_encode(url('/')) !!}

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
<div class="row" style="background-color: #2CABE1" >
  <div class="col text-center" style="">
    <span class="h5" style="color: #fff" id="datelabel"></span>
    <br />
    <span class="h5" style="color: #fff" id="timelabel"></span>
  </div>
  <div class="col text-center" style="">

  </div>
  <div class="col text-center" style="">

  </div>
  <div class="col text-center" style="">

  </div>
  <div class="col text-center" style="">

  </div>
  <div class="col text-center" style="">

  </div>
  <div class="col text-center" style="">

  </div>
</div>
<img src="/Header.png" alt="" width="100%">

<body>
    <style>
        /* #rcorners {
          border-radius: 25px;
          border: #fff;
          padding: 20px; 
          width: 40px;
        } */
        .form-select{
          border-color: #2CABE1;
        }
        .form-control {
            border-color: #2CABE1;
        }
        .form-label {
            border-color: #2CABE1;
        }


        .nav-link-risda {
            color: #2CABE1;
        }

        .nav-link-risda.active {
            background-color: #2CABE1;
            color: white;
        }

        .nav-link.active {
            background-color: #2CABE1;
            color: white;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #2CABE1;
            /* background-color: #; */
        }

        .nav-link {
          
            display: block;
            padding: 0.5rem 1rem;
            color: #2CABE1;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
            -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }
        .fa-pen{
          color: black
        }

        .nav-link:hover,
        .nav-link:focus {
            color: black;
            background-color: #2CABE1;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-logout {
            color: #fff;
            background-color: #144A73;
            text-decoration: none;
            /* border-radius: 5px; */
        }
        .navbar-vertical-divider{
          color: #2CABE1
        }
        .btn-secondary{
          color: #fff;
            background-color: #144A73;
            text-decoration: none;
        }

        .btn-primary,
        .navbar-vertical .btn-purchase,
        .tox .tox-menu__footer .tox-button:last-child,
        .tox .tox-dialog__footer .tox-button:last-child {
            color: #fff;
            background-color: #2CABE1;
            border-color: #2CABE1;
            -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
        }
        

        .btn-primary:hover,
        .navbar-vertical .btn-purchase:hover,
        .tox .tox-menu__footer .tox-button:hover:last-child,
        .tox .tox-dialog__footer .tox-button:hover:last-child {
            color: #fff;
            background-color: #2CABE1;
            border-color: #2CABE1;
        }

        .btn-check:focus+.btn-primary,
        .navbar-vertical .btn-check:focus+.btn-purchase,
        .tox .tox-menu__footer .btn-check:focus+.tox-button:last-child,
        .tox .tox-dialog__footer .btn-check:focus+.tox-button:last-child,
        .btn-primary:focus,
        .navbar-vertical .btn-purchase:focus,
        .tox .tox-menu__footer .tox-button:focus:last-child,
        .tox .tox-dialog__footer .tox-button:focus:last-child {
            color: #fff;
            background-color: #2CABE1;
            border-color: #2CABE1;
            -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%), 0 0 0 0 rgb(76 143 233 / 50%);
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%), 0 0 0 0 rgb(76 143 233 / 50%);
        }

        .btn-outline-primary {
            color: #2CABE1;
            border-color: #2CABE1;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #2CABE1;
            border-color: #2CABE1;
        }

        .nav-link-side {
            /* display: block; */
            padding: 0.5rem 1rem;
            color: #fff;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .nav-link-side {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }
        }

        .nav-link-side:hover,
        .nav-link-side:focus {
            color: #fff;
            background-color: #2CABE1;
            text-decoration: none;
            border-radius: 5px;
        }
        

        .nav-link-side.disabled {
            color: #748194;
            pointer-events: none;
            cursor: default;
        }

        li {
            display: list-item;
            color: #fff;
            text-align: -webkit-match-parent;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: var(--falcon-pagination-active-color);
            background-color: #2CABE1;
            border-color: #2CABE1;
        }
        .dropdown-indicator{
          color: b
        }

        .dropdown-indicator:after {
            content: "";
            display: block;
            position: absolute;
            right: 5 px;
            height: 0.4 rem;
            width: 0.4 rem;
            border-right: 1 px solid white;
            border-bottom: 1 px solid white;
            top: 50%;
            -webkit-transform: translateY(-50%) rotate(45deg);
            -ms-transform: translateY(-50%) rotate(45deg);
            transform: translateY(-50%) rotate(45deg);
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            -webkit-transition-property: border-color, -webkit-transform;
            transition-property: border-color, -webkit-transform;
            -o-transition-property: transform, border-color;
            transition-property: transform, border-color;
            transition-property: transform, border-color, -webkit-transform;
        }

        @media (min-width: 601px) {
            .navbar-vertical.navbar-expand-xl {
                max-width: 350px;
                top: 0;
                height: 100%;
                margin: 0;
            }

            .navbar-vertical.navbar-expand-xl .navbar-collapse {
                width: 100%;
                height: 100%;
                background: #2CABE1;
            }

            .navbar-vertical.navbar-expand-xl .navbar-vertical-content {
                width: 100%;
                height: 100%;
                padding: 0.5rem 0 0 0;
                border-block: 
            }

            .navbar-vertical {
                position: absolute;
                background: #fff;
                max-width: 350px;
            }

            .navbar-vertical-content {
                background: #fff;
                width: 350px;
            }

            .navbar-nav {
                background: #2CABE1;
                width: 350px;
            }

            .risda-m {
                margin-left: 350px;
            }

            .navbar-vertical .navbar-collapse .navbar-vertical-content {
                padding: 0 1rem;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                max-height: 100%;
              }
            }
            .card-body{
              
            }
            .label-menu{
              color: #2CABE1
            }
        @media (min-width: 1200px){
               .navbar-card .navbar-vertical.navbar-expand-xl.navbar-vibrant .navbar-collapse, .navbar-vertical.navbar-expand-xl.navbar-vibrant .navbar-vertical-content, .navbar-vertical.navbar-expand-xl.navbar-inverted .navbar-collapse, .navbar-vertical.navbar-expand-xl.navbar-inverted .navbar-vertical-content {
                width: 25rem !important;
              }}

        @media only screen and (max-width: 600px) {
            .risda-m {
                margin-left: 0px;
            }

            .navbar-vertical {
                position: absolute;
                background: #fff;
                max-width: 100%;
            }

            .navbar-vertical.navbar-expand-xl {
                max-width: 100%;
                top: 40px;
                height: auto;
                margin: 0;

            }
            .anm-bg-dg {
            background-color: #2CABE1;
        }


            .navbar-vertical.navbar-expand-xl .navbar-collapse {
                width: 100%;
                height: auto;
                background: #2CABE1;
            }

            .navbar-vertical.navbar-expand-xl .navbar-vertical-content 
            .navbar .navbar-light .navbar-vertical .navbar-expand-xl .navbar-inverted{
                width: 100%;
                height: auto;
                /* padding: 0.5rem 0 0 0; */
            }

            .navbar-vertical {
                position: absolute;
                background: #2CABE1;
                max-width: 100%;
            }

            .navbar-vertical-content {
                background: #ffffff;;
                width: 100%;
                border: black
            }
            .text-success{
              color: #fff
            }
        }
        .navbar-vertical.navbar-expand-xl {
            height: 90%;
            }
            /* .navbar .navbar-light .navbar-vertical .navbar-expand-xl .navbar-inverted{
            padding: 0rem;


            } */

    </style>
    <?php
    use Illuminate\Support\Facades\Auth;
    ?>
    {{-- <nav class="">
        <img src="/img/risda-banner.jpg" alt="banner" width="100%">
    </nav> --}}

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            @include('layouts.anm-side-bar')
            <div class="row">
                {{-- <div class="col-3 p-0" style="background-color: #2CABE1;">
            @include('layouts.risda-side-bar')
          </div> --}}
                {{-- <div class="col p-0" style="background-color:white"> --}}
                <div class="content" style="background: white">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggle-icon">
                            <span class="toggle-line"></span>
                        </span>
                    </button>

                    <div class="row px-4 risda-m">
                        @yield('content')
                    </div>

                    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                  @include('sweet::alert') --}}
                </div>
                {{-- </div> --}}
            </div>
        </div>


        <footer class="anm-bg-dg" style="background-color: #2CABE1 ">
            <div class="row p-4">
                <div class="col">
                    <div class="text-black " style="color: ">
                      Copyright © 2010-2020 AGENSI NUKLEAR MALAYSIA (MOSTI)
                    </div>
                </div>
            </div>
        </footer>

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="/vendors/popper/popper.min.js"></script>
    <script src="/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/vendors/anchorjs/anchor.min.js"></script>
    <script src="/vendors/is/is.min.js"></script>
    <script src="/vendors/chart/chart.min.js"></script>
    <script src="/vendors/leaflet/leaflet.js"></script>
    <script src="/vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="/vendors/countup/countUp.umd.js"></script>
    <script src="/vendors/echarts/echarts.min.js"></script>
    <script src="/vendors/progressbar/progressbar.min.js"></script>
    <script src="/vendors/fullcalendar/main.min.js"></script>
    <script src="/assets/js/flatpickr.js"></script>
    <script src="/vendors/dayjs/dayjs.min.js"></script>
    <script src="/vendors/fontawesome/all.min.js"></script>
    <script src="/vendors/lodash/lodash.min.js"></script>
    <script src="/vendors/list.js/list.min.js"></script>
    <script src="/assets/js/theme.js"></script>

    {{-- <script src="/js/sweetalert2.all.min.js"></script> --}}

    <script>
        $(document).ready(function() {
            setInterval(() => {
                const today = new Date();
                let day = today.getDate();
                const bulan = ['Januari', 'Februari', 'Mac', 'April', 'May', 'Jun', 'Julai', 'Ogos',
                    'September', 'Oktober', 'November', 'Disember'
                ];
                let month = bulan[today.getMonth()];
                let year = today.getFullYear();
                let h = today.getHours();
                let m = today.getMinutes();
                let s = today.getSeconds();
                if (m < 10) m = "0" + m;
                if (s < 10) s = "0" + s;
                if (day < 10) day = "0" + day;
                document.getElementById("timelabel").innerHTML = h + ":" + m + ":" + s;
                document.getElementById("datelabel").innerHTML =
                    day + " " + month + " " + year;
            }, 1000);


        });
    </script>
</body>

</html>