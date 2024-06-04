@extends('layouts.main')

@section('container1')

<section class="masthead bg-primary text-white text-center" style="background-image: url('assets/assets/img/universe.jpg');
    height:cover; overflow:auto; background-repeat: no-repeat;
  background-attachment: fixed;">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        {{-- <img class="masthead-avatar mb-5" src="assets/assets/img/avataaars.svg" alt="..." /> --}}
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Glosarium</h1>


        <!-- Icon Divider-->





        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mt-4">Pada halaman ini,
            anda akan disuguhi beberapa informasi mengenai objek-objek di alam semesta. informasi yang kami berikan
            dapat mudah dipahami oleh anda yang ingin mempelajari lebih jauh tentang alam semesta.</p>
    </div>
</section>



<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="{{ route('glosariums.index') }}" method="GET">
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
</div>


<div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
    <!-- <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div> -->
</div>


<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <!-- <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Glosarium</h2> -->

        <!-- Icon Divider-->
        <!-- <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div> -->

        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">

            <!-- <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-warning" data-bs-toggle="modal"
                    data-bs-target="#glosarium12">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>Matahari</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/matahari.jpeg" alt="..." />
                </div>
            </div>

            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#glosarium22">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>Bintang</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/bintang.jpeg" alt="..." />
                </div>
            </div>

            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#glosarium32">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>Alam Semesta</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/nebula-2.jpg" alt="..." />
                </div>
            </div> -->

            @foreach($glosariums as $glosarium)
            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal"
                    data-bs-target="#glosarium{{ $glosarium->id }}">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>{{ $glosarium->title }}</i>
                            
                        </div>
                    </div>
                    <img class="img-fluid" src="{{ asset('assets/assets/img/' . $glosarium->gambar) }}" alt="..." />
                </div>
            </div>

            <div class="portfolio-modal modal fade" id="glosarium{{ $glosarium->id }}" tabindex="-1"
                aria-labelledby="glosariumLabel{{ $glosarium->id }}" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                            {{ $glosarium->title }}</h2>
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <img class="img-fluid rounded mb-5"
                                            src="{{ asset('assets/assets/img/' . $glosarium->gambar) }}" alt="..." />
                                        <p class="mb-4" style="text-align: justify;">{!! $glosarium->body !!}</p>
                                        <button class="btn btn-primary" data-bs-dismiss="modal">
                                            <i class="fas fa-xmark fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @auth
                            <form action="{{ route('glosariums.destroy', $glosarium->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mt-3"
                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                            <a href="{{ route('glosariums.edit', $glosarium->id) }}" class="btn btn-warning btn-sm mt-3">
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