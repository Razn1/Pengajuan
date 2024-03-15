@if (Auth()->user()->level === 'Admin')
    <aside
        class="sidenav bg-default navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" /dashboard " target="_blank">
                <img src="{{ asset('/assets/img/i.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Pengajuan Laporan</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/dashboard">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" aria-expanded="false" href="#siswaMenu">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal"> Siswa <b class="caret"></b></span>
                    </a>
                    <div class="collapse" id="siswaMenu" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/siswa">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Siswa </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" aria-expanded="false" href="#userMenu">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal"> User <b class="caret"></b></span>
                    </a>
                    <div class="collapse" id="userMenu" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/user">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data User </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/user/tambah">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Tambah Data </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Sisipkan kode yang sama untuk menu lainnya -->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" aria-expanded="false"
                        href="#persetujuanMenu">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal"> Persetujuan <b class="caret"></b></span>
                    </a>
                    <div class="collapse" id="persetujuanMenu" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/persetujuan">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Persetujuan </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/persetujuan/terima">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Diterima </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/persetujuan/tolak">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Ditolak </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" aria-expanded="false" href="#pengajuanMenu">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal"> Pengajuan <b class="caret"></b></span>
                    </a>
                    <div class="collapse" id="pengajuanMenu" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/pengajuan">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Diproses </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pengajuan/terima">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Diterima </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pengajuan/tolak">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Ditolak </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/prof">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/home">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-sign-out text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@elseif(Auth()->user()->level === 'Pembimbing')
    <aside
        class="sidenav bg-default navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" /dashboard " target="_blank">
                <img src="{{ asset('/assets/img/i.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Pengajuan Laporan</span>
            </a>
        </div>
        <hr class="horizontal dark mt-2">
        <div class="w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/dashboard">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" aria-expanded="false"
                        href="#pengajuanMenu">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal"> Pengajuan <b class="caret"></b></span>
                    </a>
                    <div class="collapse" id="pengajuanMenu" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="/pengajuan">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Diproses </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/pengajuan/terima">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Diterima </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/pengajuan/tolak">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Ditolak </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" aria-expanded="false"
                        href="#persetujuanMenu">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal"> Persetujuan <b class="caret"></b></span>
                    </a>
                    <div class="collapse" id="persetujuanMenu" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="/persetujuan/terima">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Diterima </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/persetujuan/tolak">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Ditolak </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/prof">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/home">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@elseif(Auth::user()->nama != null)
    <aside
        class="sidenav bg-default navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" /dashboard " target="_blank">
                <img src="{{ asset('/assets/img/i.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Pengajuan Laporan</span>
            </a>
        </div>
        <hr class="horizontal dark mt-2">
        <div class="w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/dashboard">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/mengajukan">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Mengajukan Data</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" aria-expanded="false"
                        href="#vrExamples">
                        <span class="sidenav-mini-icon"> V </span>
                        <span class="sidenav-normal"> Pengajuan <b class="caret"></b></span>
                    </a>
                    <div class="collapse" id="vrExamples" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="/pengajuansiswa">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Diproses </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/pengajuansiswa/terima">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Diterima </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/pengajuansiswa/tolak">
                                    <span class="sidenav-mini-icon text-xs"> V </span>
                                    <span class="sidenav-normal"> Data Ditolak </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/profile">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="/home">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@endif
