<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light shadow-lg  bg-white rounded" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    UTAMA
                </a>
                <a class="nav-link collapsed {{request()->is('permohonan-sebutharga')?'activeParent':''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    PERMOHONAN SEBUTHARGA
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{request()->is('permohonan-sebutharga')?'show':''}}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/permohonan-sebutharga">SEBUTHARGA</a>
                        <a class="nav-link" href="/permohonan-sebutharga">PESANAN</a>
                        <a class="nav-link" href="/permohonan-sebutharga">KAD KERJA</a>
                        <a class="nav-link" href="/permohonan-sebutharga">INVOIS</a>
                        <a class="nav-link" href="/permohonan-sebutharga">LAPORAN</a>
                        <a class="nav-link" href="/permohonan-sebutharga">NOTA HANTARAN</a>
                        <a class="nav-link" href="/permohonan-sebutharga">PEMBAYARAN</a>
                        <a class="nav-link" href="/permohonan-sebutharga">KOD</a>
                        <a class="nav-link" href="/permohonan-sebutharga">SETUP</a>
                    </nav>
                </div>
                <a class="nav-link collapsed {{request()->is('kad-kerja*')?'activeParent':''}}" href="#" data-bs-toggle="collapse" data-bs-target="#kdkerja" aria-expanded="false" aria-controls="kdkerja">
                    KAD KERJA
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{request()->is('kad-kerja*')?'show':''}}" id="kdkerja" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{request()->is('*jana-kad-kerja')?'active':''}}" href="/kad-kerja/jana-kad-kerja" >JANA KAD KERJA</a>
                        <a class="nav-link" href="/permohonan-sebutharga">KAD KERJA MASUK</a>
                        <a class="nav-link" href="/permohonan-sebutharga">KAD KERJA</a>
                        <a class="nav-link" href="/permohonan-sebutharga">KELULUSAN</a>
                    </nav>
                </div>
                <a class="nav-link collapsed {{request()->is('sebutharga-rfq*')?'activeParent':''}}" href="#" data-bs-toggle="collapse" data-bs-target="#sebuthargaRFQ" aria-expanded="false" aria-controls="sebuthargaRFQ">
                    SEBUTHARGA RFQ
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{request()->is('sebutharga-rfq*')?'show':''}}" id="sebuthargaRFQ" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/sebutharga-rfq">SEBUTHARGA</a>
                        <a class="nav-link" href="/sebutharga-rfq">SENARAI SEBUTHARGA</a>
                        <a class="nav-link" href="/sebutharga-rfq">KELULUSAN</a>
                        <a class="nav-link" href="/sebutharga-rfq">SEBUTHARGA LAMA</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
                <a class="btn btn-primary logoutBtn" href="/logout">Log Keluar</a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
        </div>
    </nav>
</div>
