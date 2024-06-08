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
                            href="/tatasurya">Explor</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="/glosarium">Glosarium</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" 
                            href="/kakastro">Kak Astro</a></li>
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
                            <li><a class="dropdown-item" href="/listpertanyaan"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    Daftar Pertanyaan</a></li>
                            <li><a class="dropdown-item" href="/addglosarium"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    Tambah Glosarium</a></li>
                            <li><a class="dropdown-item" href="/addkakastro"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    Tambah Kakastro</a></li>
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