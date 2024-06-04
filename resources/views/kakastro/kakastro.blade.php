@extends('layouts.main')

@section('container1')

<section class="masthead bg-primary text-white text-center" style="background-image: url('assets/assets/img/universe.jpg');
    height:cover; overflow:auto; background-repeat: no-repeat;
  background-attachment: fixed;">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        {{-- <img class="masthead-avatar mb-5" src="assets/assets/img/avataaars.svg" alt="..." /> --}}
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">kak Astro</h1>

        <br>
        <!-- Icon Divider-->





        <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Pada Halaman ini,
            berisi artikel dari setiap pertanyaan yang anda ajukan melalui halaman

            @auth
                Hubungi Kami.
            @else
            <a class="text-warning" href="/tanya">Hubungi Kami</a></big>.
            @endauth

            Adapun beberapa artikel tidak hanya berasal dari pertanyaan anda
            saja, melainkan dari semua User yang mengajukan pertanyaannya.</p>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="{{ route('kakastros.index') }}" method="GET">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                    <input type="text" name="search" placeholder="Cari..." class="form-control" aria-label=""
                        aria-describedby="basic-addon1" value="{{ session('last_search') }}">
                </div>
            </form>
        </div>
    </div>

<div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
    <!-- <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div> -->
</div>


<!-- Kak Astro Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Kak Astro Section Heading-->
        <!-- <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">kakastro</h2> -->

        <!-- Icon Divider-->
        <!-- <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div> -->

        <!-- Kak Astro Grid Items-->
        <div class="row justify-content-center">

            
            <!-- <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal" data-bs-target="#kakastro12">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>Mengapa Gerhana Matahari dan Bulan Bisa Terjadi?</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/gerhanaM.jpeg" alt="..." />
                </div>
            </div>
            
            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal" data-bs-target="#kakastro22">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>Mengapa Bumi Bisa Mengalami musim?</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/orbitbumi2.jpeg" alt="..." />
                </div>
            </div>
            
            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal" data-bs-target="#kakastro32">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                            <i>Apakah Venus Memiliki Satelit Alami Seperti Bumi?</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/venus2.jpeg" alt="..." />
                </div>
            </div> -->

            @foreach($kakastros as $kakastro)
            <!-- <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal"
                    data-bs-target="#kakastro{{ $kakastro->id }}">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>{{ $kakastro->title }}</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{ asset('assets/assets/img/' . $kakastro->gambar) }}" alt="..." />
                </div>
            </div> -->

            <div class="card mb-4" style="width: 18rem; background-color: #FFE793; cursor: pointer; text-align: center; overflow:hidden; margin-left: 20px;
  margin-right: 20px;"
                data-bs-toggle="modal" data-bs-target="#kakastro{{ $kakastro->id }}">
                <div class="d-inline mt-3" style="max-height:200px; max-width:200px; overflow:hidden; margin-left: auto;
  margin-right: auto;">
                    <img class="card-img-top" src="{{ asset('assets/assets/img/' . $kakastro->gambar) }}"
                        alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $kakastro->title }}</h5>
                    <div class="mx-auto" style="max-height:100px; overflow:hidden;  --bs-border-opacity: 1;
                        border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;">
                        <p class="card-text">{!! $kakastro->body !!}</p>
                    </div>
                </div>
                <div class="mb-3" style="--bs-border-opacity: 1;
                        border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;">
                    <a href="#" class="btn btn-primary btn-sm d-inline">Read More</a>
                </div>
            </div>

            <div class="portfolio-modal modal fade" id="kakastro{{ $kakastro->id }}" tabindex="-1"
                aria-labelledby="kakastroLabel{{ $kakastro->id }}" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                            {{ $kakastro->title }}</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img class="rounded mb-4" style="max-width:30%;"
                                            src="{{ asset('assets/assets/img/' . $kakastro->gambar) }}" alt="..." />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4" style="text-align: justify;">{!! $kakastro->body !!}</p>
                                        <button class="btn btn-primary" data-bs-dismiss="modal">
                                            <i class="fas fa-xmark fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @auth
                            <form action="{{ route('kakastros.destroy', $kakastro->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mt-3"
                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                            <a href="{{ route('kakastros.edit', $kakastro->id) }}" class="btn btn-warning btn-sm mt-3">
                                <i class="fas fa-edit"></i> Update
                            </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>



@endsection