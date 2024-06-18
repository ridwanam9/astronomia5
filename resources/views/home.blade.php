@extends('layouts.main')

@section('container')
<!-- Masthead-->
<header class="masthead text-white text-center" style="background-image: url('assets/assets/img/iss.jpeg');
    height: cover;  overflow: auto;">
    <div class="container d-flex align-items-center flex-column">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row justify-content-center text-white">
            <table style="" class="justify-content-center">
                <tr>
                    <td width="600" style="font-size:30px; text-align:center; padding:20px;">
                        <p class="text-uppercase">Luar Angkasa Tanpa Batas!</p>
                    </td>
                    <td width="600" style="border-left: 2px solid white; text-align : center; padding:20px;">
                        <h3 class="masthead-heading text-uppercase">Astronomia</h3>
                    </td>
                </tr>
            </table>
        </div>


        <!-- Masthead Heading-->
        <!-- <h2 class="masthead-heading text-uppercase mb-0"> Selamat Datang di Astronomia</h2> -->


        <br>
        <br>
        <!-- Masthead Subheading-->
        <!-- <p class="masthead-subheading font-weight-light mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi reiciendis assumenda, excepturi, recusandae quibusdam natus voluptatum nemo necessitatibus fugiat dicta ratione quas illum soluta. Quae, eligendi cupiditate consequatur ipsam unde ducimus iusto tempore cum sint perferendis! Cupiditate, quam dolores? Omnis accusamus et error. Est eaque assumenda porro cupiditate et! Eligendi voluptas nihil omnis ab? Blanditiis velit perspiciatis assumenda dolorem voluptatem! In adipisci nostrum possimus laudantium totam tenetur provident veniam minus officia. Iste iusto in voluptatibus dolor? Quae nam fuga ipsum nesciunt tenetur reiciendis, eum incidunt voluptas earum praesentium, hic perferendis quasi pariatur odio repellat exercitationem aperiam sit. Aliquam, iusto mollitia. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur architecto officia harum asperiores alias, molestiae aperiam quibusdam nemo dignissimos omnis! Quas saepe officia voluptates itaque esse numquam aut recusandae impedit voluptate aliquam excepturi illo, debitis reprehenderit similique expedita deleniti earum totam cumque facilis enim natus molestias amet sequi. Voluptatum enim vel, molestias, expedita, dolor mollitia quae maxime maiores adipisci non possimus praesentium est? Ratione quisquam iste at itaque, rerum excepturi ullam autem aut fuga, delectus vel in cupiditate inventore accusamus eligendi nobis recusandae tempora asperiores deserunt veritatis sint vero maxime facilis iure? Ducimus ab mollitia dolor, dicta nostrum neque exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos maxime eum iure magnam tenetur quo alias, expedita sequi beatae quidem reprehenderit labore cupiditate nostrum tempora perferendis ducimus obcaecati. Quod harum possimus officia nam, porro consequuntur necessitatibus quae repudiandae repellendus obcaecati et beatae eum autem ex repellat debitis aliquid cum aliquam dolorum blanditiis ut? Beatae unde eveniet natus rerum vitae inventore, exercitationem soluta vero atque laborum dolore maxime iste quibusdam iusto animi quidem laboriosam at necessitatibus, nesciunt suscipit. Facere doloremque velit mollitia veritatis possimus labore, unde numquam! Vitae quibusdam voluptate totam, culpa cum commodi explicabo odit nesciunt facilis suscipit iure temporibus?</p> -->
    </div>
</header>



<header class="page-section portfolio" style="background-image: url('assets/assets/img/nebula.jpg');
    height: 70vh;  overflow: auto;">
    <div class="container d-flex align-items-center flex-column">



        <!-- Masthead Heading-->
        <!-- <h2 class="masthead-heading text-uppercase mb-0">Tentang Kami</h2> -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 text-white">Tentang Kami</h2>
        <br>
        <br>
        <!-- Masthead Subheading-->
        <p class="font-weight-light mb-0 text-white" style="font-size:20px; text-align:justify;">Selamat datang di Astronomia,
            aplikasi yang dirancang khusus untuk para pecinta astronomi dan mereka yang ingin menjelajahi keindahan alam
            semesta! Kami adalah tim yang terdiri dari mahasiswa pecinta ilmu pengetahuan dan tentu saja menyukai
            mempelajari luar angkasa, sangat bersemangat untuk membawa pengetahuan astronomi ke ujung jari Anda.
        </p>
        <br>
        <p class="font-weight-light mb-0 text-white" style="font-size:20px; text-align:justify;">Di Astronomia, misi kami
            adalah mempermudah setiap orang untuk belajar tentang ruang angkasa dan fenomena astronomi. Kami percaya
            bahwa pengetahuan tentang alam semesta seharusnya bisa diakses oleh semua orang, tidak peduli latar belakang
            atau usia.
        </p>
    </div>
</header>



<!-- Glosarium Section-->
<section class="page-section portfolio" id="portfolio" style="background-image: url('assets/assets/img/nebula2.jpg');
    height: 110vh;">
    <div class="container">

        <!-- Glosarium Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 text-white">Glosarium</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>



        <!-- Glosarium Grid Items-->
        <!-- <div class="row justify-content-center">

            <div class="col-md-5 col-lg-3 mb-4">
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

        </div> -->


        <p class="text-light font-weight-light mb-0" style="text-align:center; font-size: 1.25rem;">Pada
            halaman ini,
            anda akan disuguhi beberapa informasi mengenai objek-objek di alam semesta. informasi yang kami berikan
            dapat mudah dipahami oleh anda yang ingin mempelajari lebih jauh tentang alam semesta.
        </p>
        <big class="d-block text-center text-light mt-4 mb-4">Lihat Ke Halaman <a class="text-warning"
                href="/glosarium">Glosarium</a></big>


        <div class="row justify-content-center">

            @foreach($glosariums->take(3) as $glosarium)
            <div class="col-md-3 mb-4">
                <div class="card"
                    style="background-color: #FFE793; cursor: pointer; text-align: center; overflow:hidden;"
                    data-bs-toggle="modal" data-bs-target="#glosarium{{ $glosarium->id }}">
                    <div class="d-inline mt-3"
                        style="max-height:200px; max-width:200px; overflow:hidden; margin-left: auto; margin-right: auto;">
                        <img class="card-img-top" src="{{ asset('assets/assets/img/' . $glosarium->gambar) }}"
                            alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $glosarium->title }}</h5>
                        <div class="" style="max-height:100px; overflow:hidden;">
                            <p class="card-text">{!! $glosarium->body !!}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="#" class="btn btn-primary btn-sm d-inline">Read More</a>
                    </div>
                </div>

                <div class="portfolio-modal modal fade" id="glosarium{{ $glosarium->id }}" tabindex="-1"
                    aria-labelledby="glosariumLabel{{ $glosarium->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
                                            <p class="mb-4" style="text-align: justify;">{!! $glosarium->body !!}</p>
                                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                                <i class="fas fa-xmark fa-fw"></i>
                                                Close Window
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @auth
                                @if(auth()->user()->is_admin)
                                <form action="{{ route('glosariums.destroy', $glosarium->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mt-3"
                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                                <a href="{{ route('glosariums.edit', $glosarium->id) }}"
                                    class="btn btn-warning btn-sm mt-3">
                                    <i class="fas fa-edit"></i> Update
                                </a>
                                @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>




<!-- Kak Astro Section-->
<section class="page-section portfolio" id="portfolio" style="background-image: url('assets/assets/img/nebula3.jpg');
    height: 120vh;">
    <div class="container">
        <!-- Kak Astro Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 text-white">Kak Astro</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <p class="text-light font-weight-light mb-0" style="text-align:center; font-size: 1.25rem;">Pada Halaman ini,
            berisi artikel dari setiap pertanyaan yang anda ajukan melalui halaman

            @auth
            @if(!auth()->user()->is_admin)
            <a class="text-warning" href="/tanya">Tanya</a></big>.
            @else
            Tanya.
            @endelse
            @endif
            @else
            <a class="text-warning" href="/login">Tanya</a></big>.
            @endauth

            Adapun beberapa artikel tidak hanya berasal dari pertanyaan anda
            saja, melainkan dari semua User yang mengajukan pertanyaannya.
        </p>
        <big class="d-block text-center text-light mt-4 mb-4">Lihat Ke Halaman <a class="text-warning"
                href="/kakastro">Kak
                Astro</a></big>

        <!-- <div class="row justify-content-center">
            
            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal"
                    data-bs-target="#kakastro12">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>Mengapa Gerhana Matahari dan Bulan Bisa Terjadi?</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/gerhanaM.jpeg" alt="..." />
                </div>
            </div>

        </div> -->


        <div class="row justify-content-center">
            @foreach($kakastros->take(3) as $kakastro)
            <div class="col-md-3 mb-4">
                <div class="card"
                    style="background-color: #FFE793; cursor: pointer; text-align: center; overflow:hidden;"
                    data-bs-toggle="modal" data-bs-target="#kakastro{{ $kakastro->id }}">
                    <div class="d-inline mt-3"
                        style="max-height:200px; max-width:200px; overflow:hidden; margin-left: auto; margin-right: auto;">
                        <img class="card-img-top" src="{{ asset('assets/assets/img/' . $kakastro->gambar) }}"
                            alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $kakastro->title }}</h5>
                        <div class="mx-auto" style="max-height:100px; overflow:hidden;">
                            <p class="card-text">{!! $kakastro->body !!}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="#" class="btn btn-primary btn-sm d-inline">Read More</a>
                    </div>
                </div>

                <div class="portfolio-modal modal fade" id="kakastro{{ $kakastro->id }}" tabindex="-1"
                    aria-labelledby="kakastroLabel{{ $kakastro->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">
                                                {{ $kakastro->title }}</h2>
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <img class="rounded mb-4" style="max-width:30%;"
                                                src="{{ asset('assets/assets/img/' . $kakastro->gambar) }}" alt="..." />
                                            <p class="mb-4" style="text-align: justify;">{!! $kakastro->body !!}</p>
                                            <button class="btn btn-primary" data-bs-dismiss="modal">
                                                <i class="fas fa-xmark fa-fw"></i>
                                                Close Window
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @auth
                                @if(auth()->user()->is_admin)
                                <form action="{{ route('kakastros.destroy', $kakastro->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mt-3"
                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                                <a href="{{ route('kakastros.edit', $kakastro->id) }}"
                                    class="btn btn-warning btn-sm mt-3">
                                    <i class="fas fa-edit"></i> Update
                                </a>
                                @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">
                    Jl. Rajawali, Kec. Gamping
                    <br />
                    Kab. Bantul, Daerah Istimewa Yogyakarta
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">About Astronomia</h4>
                <p class="lead mb-0">
                    {{-- Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a> --}}
                    .
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
</div>
@endsection