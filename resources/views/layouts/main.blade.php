<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Astronomia</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/home.css" rel="stylesheet" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <!-- <a class="navbar-brand" href="/">Astronomia</a> -->
            <a class="navbar-brand" href="/">
                <img width="120px" height="60px" src="assets/assets/img/removedbg-weblogo.png"
                    style="position:relative;">

            </a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Pengenalan</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/pengertian">Pengertian Astronomi</a></li>
                            <li><a class="dropdown-item" href="/sejarah">Sejarah Astronomi</a></li>
                            <li><a class="dropdown-item" href="/ruanglingkup">Ruang Lingkup Astronomi</a></li>
                        </ul>
                    </li> -->

                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/glosarium">Glosarium</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/kakastro">Kak
                            Astro</a></li>
                    @guest
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/tanya">Hubungi Kami</a></li>
                    @endguest

                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Hi {{auth()->user()->name}}</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/posts"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    Post</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-left"></i> logout
                                    </button>
                                </form>

                            </li>

                        </ul>
                    </li>
                    @else
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login"><i
                                class="bi bi-box-arrow-in-right"></i> Login Admin</a></li>
                    @endauth


                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('container')
    </div>

    <div style="background-image: url('assets/assets/img/universe.jpg');
      background-repeat: no-repeat;
  background-attachment: fixed;">
        @yield('container1')
    </div>



    <div style="background-image: url('assets/assets/img/universe.jpg');
    height: cover;  background-repeat: no-repeat;
  background-attachment: fixed;">
        @yield('container2')
    </div>




    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="glosarium1" tabindex="-1" aria-labelledby="glosarium1"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Matahari</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/assets/img/matahari.jpeg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4" syle="text-align=justify;">Matahari adalah bintang yang berada di pusat
                                    tata suryaLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, a fugiat id
                                    quos harum eligendi quo facilis illo voluptatibus sunt dolores, aspernatur cumque
                                    maxime. Porro itaque eaque soluta rem? Consequuntur!</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="glosarium2" tabindex="-1" aria-labelledby="portfolioModal2"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Bintang</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/assets/img/bintang.jpeg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Bintang adalah benda langit yang bisa mengeluarkan cahaya Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Modi, a fugiat id quos harum eligendi
                                    quo facilis illo voluptatibus sunt.</p>
                                <p class="mb-4">Bintang adalah benda langit yang bisa mengeluarkan cahaya Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Modi, a fugiat id quos harum eligendi
                                    quo facilis illo voluptatibus sunt dolores, aspernatur cumque maxime. Porro itaque
                                    eaque soluta rem? Consequuntur!</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->

    <div class="portfolio-modal modal fade" id="glosarium3" tabindex="-1" aria-labelledby="portfolioModal3"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Alam Semesta
                                </h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/assets/img/nebula-2.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Alam Semesta adalah benda langit yang bisa mengeluarkan cahaya Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Modi, a fugiat id quos harum
                                    eligendi quo facilis illo voluptatibus sunt.</p>
                                <p class="mb-4">Bintang adalah benda langit yang bisa mengeluarkan cahaya Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Modi, a fugiat id quos harum eligendi
                                    quo facilis illo voluptatibus sunt dolores, aspernatur cumque maxime. Porro itaque
                                    eaque soluta rem? Consequuntur!</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- kakastro Modal 1-->
    <div class="portfolio-modal modal fade" id="kakastro1" tabindex="-1" aria-labelledby="portfolioModal4"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Mengapa Gerhana
                                    Matahari dan Bulan Bisa Terjadi?</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->

                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4" style="text-align:justify;">Gerhana matahari terjadi ketika posisi bulan terletak di antara bumi dan
                                    matahari sehingga terlihat menutup sebagian atau seluruh cahaya matahari di langit
                                    bumi.</p>
                                <div class="row text-content-center">
                                    <img class="rounded mb-4" style="max-width:40%;"
                                        src="assets/assets/img/gerhanaM.jpeg" alt="..." />
                                    <img class="rounded mb-4" style="max-width:40%;"
                                        src="assets/assets/img/observasi.jpeg" alt="..." />
                                </div>
                                <div class="row">
                                    <h6 class="mb-4">Peristiwa Gerhana Matahari di Meksiko, 8 April 2024</h6>
                                </div>
                                <p class="mb-4" style="text-align:justify;">Berdasarkan cara tertutupnya matahari, terdapat empat jenis
                                    gerhana matahari: gerhana matahari total, gerhana matahari cincin, gerhana matahari
                                    sebagian, dan gerhana matahari hibrida/campuran. Walaupun bulan berukuran sekitar
                                    400 kali lebih kecil daripada matahari, bulan terletak sekitar 400 kali lebih dekat
                                    ke bumi sehingga kedua benda langit ini tampak hampir sama besar di langit bumi.
                                    Karena orbit bulan berbentuk elips, jaraknya dari bumi sedikit berubah-ubah sehingga
                                    kadang tampak lebih besar dan mampu menutupi matahari (menyebabkan gerhana total)
                                    atau kadang lebih kecil dan hanya dapat menyebabkan gerhana matahari cincin.</p>

                                <div class="row">
                                    <img class="rounded mb-4" style="max-width:40%;"
                                        src="assets/assets/img/gerhanaB.jpeg" alt="..." />
                                    <img class="rounded mb-4" style="max-width:40%;"
                                        src="assets/assets/img/fasegerhanaB.jpeg" alt="..." />
                                </div>
                                <div class="row">
                                    <h6 class="mb-4 text-bold">Peristiwa Gerhana Bulan di Yogyakarta, 15 April 2014</h6>
                                </div>
                                <p class="mb-4" style="text-align:justify;">Gerhana Bulan terjadi ketika Bulan terutup oleh bayangan Bumi. Peristiwa
                                    ini hanya dapat terjadi ketika posisi Matahari, Bumi, dan Bulan tepat atau hampir
                                    membentuk garis lurus dan Bulan berada dalam fase Bulan purnama. Jenis dan durasi
                                    gerhana Bulan bergantung pada jarak Bulan terhadap simpulnya di orbit.</p>

                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- kakastro Modal 2-->
    <div class="portfolio-modal modal fade" id="kakastro2" tabindex="-1" aria-labelledby="portfolioModal5"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Mengapa Bumi Bisa
                                    Mengalami musim?
                                </h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                    neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit
                                    asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- kakastro Modal 3-->
    <div class="portfolio-modal modal fade" id="kakastro3" tabindex="-1" aria-labelledby="portfolioModal6"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Mengapa Venus Tidak
                                    Memiliki Satelit Alami Seperti Bumi?</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                    neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit
                                    asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>