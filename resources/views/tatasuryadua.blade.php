@extends('layouts.main')

@section('container')

<head>
    <title>Tata Surya Dua</title>
    <style>
    .iframe-container {
        position: relative;
        width: 100%;
        padding-bottom: 60%;
        /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
    }

    .iframe-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
    </style>
</head>

<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <!-- <a class="navbar-brand" href="/">Astronomia</a> -->
        <a class="navbar-brand" href="/">
            <img width="120px" height="60px" src="assets/assets/img/removedbg-weblogo.png" style="position:relative;">

        </a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                        href="/tatasuryadua">Jelajah</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                        href="/glosarium">Glosarium</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/kakastro">Kak
                        Astro</a></li>
                @guest
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">Tanya</a>
                </li>
                @else
                @if(!auth()->user()->is_admin)
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/tanya">Tanya</a>
                </li>
                @endif
                @endguest

            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Hi {{auth()->user()->name}}</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/listpertanyaan"><i
                                    class="bi bi-layout-text-sidebar-reverse"></i>
                                Daftar Pertanyaan</a></li>
                        <li><a class="dropdown-item" href="/addglosarium"><i
                                    class="bi bi-layout-text-sidebar-reverse"></i>
                                Tambah Glosarium</a></li>
                        <li><a class="dropdown-item" href="/addkakastro"><i
                                    class="bi bi-layout-text-sidebar-reverse"></i>
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
<br>
<br>
<br>
<br>

<!-- <div class="iframe-container"> -->
<iframe src="{{ url('/tatasuryaori') }}" height="800" width="1400" title="Iframe Example"></iframe>
<!-- </div> -->
@endsection