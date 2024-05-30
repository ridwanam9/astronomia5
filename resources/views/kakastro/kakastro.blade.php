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
        <!-- <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Glosarium</h2> -->

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
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal" data-bs-target="#kakastro1">
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
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal" data-bs-target="#kakastro2">
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
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal" data-bs-target="#kakastro3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                            <i>Apakah Venus Memiliki Satelit Alami Seperti Bumi?</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/venus2.jpeg" alt="..." />
                </div>
            </div>


        </div>
    </div>
</section>



@endsection