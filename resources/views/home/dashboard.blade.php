@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 ">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8 ">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Laporan </p>
                                    <h5 class="font-weight-bolder">
                                        {{ $laporan }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <a href="/transaksi" class="small-box-footer">
                                        <i class="ni ni-archive-2 text-lg opacity-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Proposal</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $proposal }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <a href="/user" class="small-box-footer"><i
                                            class="ni ni-book-bookmark text-lg opacity-10" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Diterima</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $terima }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <a href="/sepatu" class="small-box-footer"><i
                                            class="ni ni-check-bold text-lg opacity-10" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Ditolak</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $tolak }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <a href="/sepatu" class="small-box-footer"><i
                                            class="ni ni-fat-remove text-lg opacity-10" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-5">
                <div class="card card-carousel overflow-hidden h-100 p-0">
                    <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner border-radius-lg h-100">
                            <div class="carousel-item h-100 active"
                                style="background-image: url('../assets/img/carousel-1.jpg');
    background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Get started with Argon</h5>
                                    <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                                </div>
                            </div>
                            <div class="carousel-item h-100"
                                style="background-image: url('../assets/img/carousel-2.jpg');
    background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Faster way to create web pages</h5>
                                    <p>That’s my skill. I’m not really specifically talented at anything except for the
                                        ability to learn.</p>
                                </div>
                            </div>
                            <div class="carousel-item h-100"
                                style="background-image: url('../assets/img/carousel-3.jpg');
    background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-trophy text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Share with us your design tips!</h5>
                                    <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev w-5 me-3" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next w-5 me-3" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card ">
                    <div class="card-header bg-white pb-0 p-3">
                        @if (Auth()->User()->level === 'Pembimbing')
                            <div class="d-flex justify-content-between">
                                <h4 class="mb-2 text-dark text-uppercase fw-bold ">History Persetujuan</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-dark" id="">
                                    <thead>
                                        <tr align="center">
                                            <th>Nis</th>
                                            <th>Pembimbing</th>
                                            <th>Judul Laporan</th>
                                            <th>Tanggal ACC</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perset as $ps)
                                            @if ($ps->id_user == Auth()->id())
                                                <tr align="center">
                                                    <td>{{ $ps->nis }}</td>
                                                    <td>{{ $ps->User->nama }}</td>
                                                    <td>{{ $ps->Pengajuan->judul_laporan }}</td>
                                                    <td>{{ $ps->tanggal_acc }}</td>
                                                    <td>
                                                        @if ($ps->status === 'Diterima')
                                                            <a class="btn btn-success"><i class="fa fa-check"
                                                                    aria-hidden="true"></i></a>
                                                        @elseif ($ps->status === 'Ditolak')
                                                            <a class="btn btn-danger"><i class="fa fa-times"
                                                                    aria-hidden="true"></i></a>
                                                        @else
                                                            <a class="btn btn-primary"><i class="fa fa-spinner"
                                                                    aria-hidden="true"></i></a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($ps->status === 'Ditolak')
                                                            <a href="{{ 'https://api.whatsapp.com/send?phone=' . urlencode('62895369564349') . '&text=' . urlencode('pengajuan anda ditolak') }}"
                                                                target="_blank" class="btn btn-info">Kirim Pesan WA</a>
                                                        @elseif ($ps->status === 'Diterima')
                                                            <a href="{{ 'https://api.whatsapp.com/send?phone=' . urlencode('62895369564349') . '&text=' . urlencode('pengajuan anda diterima') }}"
                                                                target="_blank" class="btn btn-info">Kirim Pesan WA</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @elseif(Auth()->User()->level === 'Admin')
                            <div class="d-flex justify-content-between">
                                <h4 class="mb-2 text-dark text-uppercase fw-bold ">History Pengajuan</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-dark" id="">
                                    <thead>
                                        <tr align="center">
                                            <th>Nis</th>
                                            <th>Judul Laporan</th>
                                            <th>Proposal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuan as $pg)
                                            <tr align="center">
                                                <td>{{ $pg->nis }}</td>
                                                <td>{{ $pg->judul_laporan }}</td>
                                                <td><a href="/pengajuan/{{ $pg->id }}/open">{{ $pg->proposal }}</a>
                                                </td>
                                                <td>
                                                    @if ($pg->status == 'diterima')
                                                        <a class="btn btn-success"><i class="fa fa-check"
                                                                aria-hidden="true"></i></a>
                                                    @elseif($pg->status == 'ditolak')
                                                        <a class="btn btn-danger"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a>
                                                    @else
                                                        <a class="btn btn-primary"><i class="fa fa-spinner"
                                                                aria-hidden="true"></i></a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (Auth::user()->level == 'Pembimbing' && $pengajuan->where('status', 'proses')->isNotEmpty())
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#modalId"
                                                            onclick="prepareModal({{ $pg->id }},'{{ $pg->nis }}')">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </button>
                                                    @endif
                                                    <a href="/pengajuan/{{ $pg->id }}/open" target="_blank"
                                                        class="btn btn-info"><i class="fa fa-folder-open"
                                                            aria-hidden="true"></i></a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="d-flex justify-content-between">
                                <h4 class="mb-2 text-dark text-uppercase fw-bold ">History Pengajuan</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-dark">
                                    <thead>
                                        <tr align="center">
                                            <th>Nis</th>
                                            <th>Judul Laporan</th>
                                            <th>Proposal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuan as $pg)
                                            <tr align="center">
                                                <td>{{ $pg->nis }}</td>
                                                <td>{{ $pg->judul_laporan }}</td>
                                                <td><a href="/pengajuan/{{ $pg->id }}/open">{{ $pg->proposal }}</a>
                                                </td>
                                                <td>
                                                    @if ($pg->status == 'diterima')
                                                        <a class="btn btn-success"><i class="fa fa-check"
                                                                aria-hidden="true"></i></a>
                                                    @elseif($pg->status == 'ditolak')
                                                        <a class="btn btn-danger"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a>
                                                    @else
                                                        <a class="btn btn-primary"><i class="fa fa-spinner"
                                                                aria-hidden="true"></i></a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="/pengajuan/{{ $pg->id }}/open" target="_blank"
                                                        class="btn btn-info"><i class="fa fa-folder-open"
                                                            aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
        {{-- <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer> --}}
    </div>
@endsection
