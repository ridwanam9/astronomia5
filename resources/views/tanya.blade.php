@extends('layouts.main')

@section('container1')

<section class="masthead bg-primary text-white text-center" style="background-image: url('assets/assets/img/universe.jpg');
    height:cover; overflow:auto; background-repeat: no-repeat;
  background-attachment: fixed;">
    <div class="container d-flex align-items-center flex-column">
        
        <h1 class="masthead-heading text-uppercase mb-0">Selamat Datang di Tanya Kak Astro</h1>

        
        <!-- Icon Divider-->





        {{-- <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p> --}}
    </div>
</section>


<div class="container input-group">
<button type="button" class="btn btn-primary" data-mdb-ripple-init>
    <i class="fas fa-search"></i>
  </button>
  <input type="search" class="form-inline rounded my-2 my-lg-0" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  
</div>

<div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
    <!-- <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div> -->
</div>



@endsection