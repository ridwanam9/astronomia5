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





        {{-- <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p> --}}
    </div>
</section>



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

            <!-- Kak Astro Item 1-->
            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal" data-bs-target="#kakastro12">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>Mengapa Gerhana Matahari dan Bulan Bisa Terjadi?</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/gerhanaM.jpeg" alt="..." />
                </div>
            </div>
            <!-- Kak Astro Item 2-->
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
            <!-- Kak Astro Item 3-->
            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal" data-bs-target="#kakastro32">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                            <i>Apakah Venus Memiliki Satelit Alami Seperti Bumi?</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/venus2.jpeg" alt="..." />
                </div>
            </div>

            @foreach($kakastros as $kakastro)
            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal"
                    data-bs-target="#kakastro{{ $kakastro->id }}">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>{{ $kakastro->title }}</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{ asset('assets/assets/img/' . $kakastro->gambar) }}" alt="..." />
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
                                        <img class="img-fluid rounded mb-5"
                                            src="{{ asset('assets/assets/img/' . $kakastro->gambar) }}" alt="..." />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4" style="text-align: justify;">{{ $kakastro->body }}</p>
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