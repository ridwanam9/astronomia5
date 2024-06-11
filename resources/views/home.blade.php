@extends('layouts.main')

@section('container')
<!-- Masthead-->
<header class="masthead text-white text-center" style="background-image: url('assets/assets/img/iss.jpeg');
    height: cover;  overflow: auto">
    <div class="container d-flex align-items-center flex-column">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif




        <!-- Masthead Heading-->
        <h2 class="masthead-heading text-uppercase mb-0"> Selamat Datang di Astronomia</h2>


        <br>
        <br>
        <!-- Masthead Subheading-->
        <!-- <p class="masthead-subheading font-weight-light mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi reiciendis assumenda, excepturi, recusandae quibusdam natus voluptatum nemo necessitatibus fugiat dicta ratione quas illum soluta. Quae, eligendi cupiditate consequatur ipsam unde ducimus iusto tempore cum sint perferendis! Cupiditate, quam dolores? Omnis accusamus et error. Est eaque assumenda porro cupiditate et! Eligendi voluptas nihil omnis ab? Blanditiis velit perspiciatis assumenda dolorem voluptatem! In adipisci nostrum possimus laudantium totam tenetur provident veniam minus officia. Iste iusto in voluptatibus dolor? Quae nam fuga ipsum nesciunt tenetur reiciendis, eum incidunt voluptas earum praesentium, hic perferendis quasi pariatur odio repellat exercitationem aperiam sit. Aliquam, iusto mollitia. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur architecto officia harum asperiores alias, molestiae aperiam quibusdam nemo dignissimos omnis! Quas saepe officia voluptates itaque esse numquam aut recusandae impedit voluptate aliquam excepturi illo, debitis reprehenderit similique expedita deleniti earum totam cumque facilis enim natus molestias amet sequi. Voluptatum enim vel, molestias, expedita, dolor mollitia quae maxime maiores adipisci non possimus praesentium est? Ratione quisquam iste at itaque, rerum excepturi ullam autem aut fuga, delectus vel in cupiditate inventore accusamus eligendi nobis recusandae tempora asperiores deserunt veritatis sint vero maxime facilis iure? Ducimus ab mollitia dolor, dicta nostrum neque exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos maxime eum iure magnam tenetur quo alias, expedita sequi beatae quidem reprehenderit labore cupiditate nostrum tempora perferendis ducimus obcaecati. Quod harum possimus officia nam, porro consequuntur necessitatibus quae repudiandae repellendus obcaecati et beatae eum autem ex repellat debitis aliquid cum aliquam dolorum blanditiis ut? Beatae unde eveniet natus rerum vitae inventore, exercitationem soluta vero atque laborum dolore maxime iste quibusdam iusto animi quidem laboriosam at necessitatibus, nesciunt suscipit. Facere doloremque velit mollitia veritatis possimus labore, unde numquam! Vitae quibusdam voluptate totam, culpa cum commodi explicabo odit nesciunt facilis suscipit iure temporibus?</p> -->
    </div>
</header>



<header class="masthead text-white text-center" style="background-image: url('assets/assets/img/nebula.jpg');
    height: 90vh;  overflow: auto;">
    <div class="container d-flex align-items-center flex-column">



        <!-- Masthead Heading-->
        <h2 class="masthead-heading text-uppercase mb-0">Tentang Kami</h2>

        <br>
        <br>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0" style="text-align:justify;">Selamat datang di Astronomia,
            aplikasi yang dirancang khusus untuk para pecinta astronomi dan mereka yang ingin menjelajahi keindahan alam
            semesta! Kami adalah tim yang terdiri dari mahasiswa pecinta ilmu pengetahuan dan tentu saja menyukai
            mempelajari luar angkasa, sangat bersemangat untuk membawa pengetahuan astronomi ke ujung jari Anda.
        </p>
        <p class="masthead-subheading font-weight-light mb-0" style="text-align:justify;">Di Astronomia, misi kami
            adalah mempermudah setiap orang untuk belajar tentang ruang angkasa dan fenomena astronomi. Kami percaya
            bahwa pengetahuan tentang alam semesta seharusnya bisa diakses oleh semua orang, tidak peduli latar belakang
            atau usia.
        </p>
    </div>
</header>



<!-- Glosarium Section-->
<section class="page-section portfolio" id="portfolio" style="background-image: url('assets/assets/img/nebula2.jpg');
    height: 90vh; overflow: auto">
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


            <div class="card mb-4" style="width: 18rem; background-color: #FFE793; cursor: pointer; text-align: center; overflow:hidden; margin-left: 20px;
    margin-right: 20px;" data-bs-toggle="modal" data-bs-target="#glosarium12">
                <div class="d-inline mt-3" style="max-height:200px; max-width:200px; overflow:hidden; margin-left: auto;
    margin-right: auto;">
                    <img class="card-img-top" src="assets/assets/img/matahari.jpeg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Matahari</h5>
                    <div class="" style="max-height:100px; overflow:hidden;  --bs-border-opacity: 1;
            border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;">
                        <p class="card-text">Matahari telah disebut dengan banyak
                            nama. Kata Latin untuk Matahari adalah “sol,” yang merupakan kata sifat
                            utama untuk semua hal yang berhubungan dengan Matahari: Surya. Helios, dewa
                            Matahari dalam mitologi Yunani kuno, juga meminjamkan namanya ke banyak
                            istilah yang berhubungan dengan Matahari, seperti heliosfer dan
                            helioseismologi.</p>
                    </div>
                </div>
                <div class="mb-3" style="--bs-border-opacity: 1;
            border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;">
                    <a href="#" class="btn btn-primary btn-sm d-inline">Read More</a>
                </div>
            </div>

            <div class="portfolio-modal modal fade" id="glosarium12" tabindex="-1" aria-labelledby="glosarium12"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0"><button class="btn-close" type="button"
                                data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">

                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Matahari
                                        </h2>

                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>

                                        <table style="width:100%; text-align: left;">
                                            <tr>
                                                <th rowspan="8"><img class="img-fluid rounded mb-5"
                                                        style="max-width:70%;" src="assets/assets/img/matahari.jpeg"
                                                        alt="..." /></th>
                                            </tr>
                                            <tr>
                                                <td>Benda langit</td>
                                                <td>: Bintang</td>

                                            </tr>
                                            <tr>
                                                <td>Jarak Dari Bumi</td>
                                                <td>: 149.600.000 Km</td>

                                            </tr>
                                            <tr>
                                                <td>Diameter</td>
                                                <td>: 1.000.000 Km</td>

                                            </tr>
                                            <tr>
                                                <td>Suhu</td>
                                                <td>: 5.500 derajat C</td>

                                            </tr>
                                            <tr>
                                                <td>Massa(Bumi=1)</td>
                                                <td>: 333.060 Bumi</td>

                                            </tr>
                                            <tr>
                                                <td>Volume(Bumi=1)</td>
                                                <td>: 1.300.000 Bumi</td>

                                            </tr>
                                            <tr>
                                                <td>Gravitasi(Bumi=1)</td>
                                                <td>: 27,94 Bumi</td>

                                            </tr>
                                        </table>

                                        <div class="row">
                                            <h6 class="mb-4 mt-3 text-bold">Asal Nama</h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Matahari telah disebut dengan banyak
                                            nama. Kata Latin untuk Matahari adalah “sol,” yang merupakan kata sifat
                                            utama untuk semua hal yang berhubungan dengan Matahari: Surya. Helios, dewa
                                            Matahari dalam mitologi Yunani kuno, juga meminjamkan namanya ke banyak
                                            istilah yang berhubungan dengan Matahari, seperti heliosfer dan
                                            helioseismologi.</p>
                                        <p class="mb-4" syle="text-align=justify;">Lalu dari mana kata MATAHARI dalam
                                            bahasa Indonesia berasal? Secara Harfiah, kata “matahari” berasal dari
                                            gabungan dua kata, yaitu “mata” yang berarti indra pengelihatan manusia, dan
                                            “hari” yang merupakan satuan waktu yang terdiri dari siang dan malam.
                                            Menurut KBBI (Kamus Besar Bahasa Indonesia), MATAHARI adalah bintang yang
                                            merupakan pusat tata surya, memancarkan panas dan cahaya ke Bumi dan
                                            planet-palnet lain yang mengedarinya, sebagian besar kandungannya berupa
                                            hidrogen dan helium.</p>
                                        <iframe width="560" height="315"
                                            src="https://solarsystem.nasa.gov/gltf_embed/2352/?height=450&amp;amp;rotate=true&amp;amp;cc=true&amp;amp;fs=true&amp;amp;target=&amp;amp;orbit="
                                            title=""
                                            class="smd-iframe-iframe margin-left-auto margin-right-auto border-0"
                                            allow="fullscreen">Unable to render the provided source</iframe>
                                        <div class="row">
                                            <h6 class="mb-1 text-bold">Model 3D Dimensi Matahari</h6>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-4 text-bold">Sumber: NASA Visualization Technology
                                                Applications and Development (VTAD)</h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Matahari kita adalah bintang katai
                                            kuning berusia 4,5 miliar tahun – sebuah bola hidrogen dan helium yang
                                            bersinar panas – di pusat tata surya kita. Jaraknya sekitar 93 juta mil (150
                                            juta kilometer) dari Bumi dan merupakan satu-satunya bintang di tata surya
                                            kita. Tanpa energi Matahari, kehidupan yang kita kenal tidak akan ada di
                                            planet asal kita.</p>
                                        <p class="mb-4" syle="text-align=justify;">Matahari terbentuk dalam awan gas dan
                                            debu raksasa yang berputar yang disebut Nebula Matahari. Saat nebula itu
                                            runtuh karena gravitasinya sendiri, ia berputar lebih cepat dan menjadi rata
                                            menjadi piringan. Sebagian besar materi nebula ditarik ke arah pusat untuk
                                            membentuk Matahari kita, yang menyumbang 99,8% massa tata surya kita.</p>


                                        <div class="row">
                                            <h6 class="mb-4 mt-4 text-bold">Posisi Matahari</h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Matahari terbentuk dalam awan gas dan
                                            debu raksasa yang berputar yang disebut Nebula Matahari. Saat nebula itu
                                            runtuh karena gravitasinya sendiri, ia berputar lebih cepat dan menjadi rata
                                            menjadi piringan. Sebagian besar materi nebula ditarik ke arah pusat untuk
                                            membentuk Matahari kita, yang menyumbang 99,8% massa tata surya kita.</p>

                                        <div class="row">
                                            <h6 class="mb-4 mt-4 text-bold">Struktur Matahari</h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Matahari adalah bola besar hidrogen
                                            dan helium yang disatukan oleh gravitasinya sendiri. Bagian terpanas
                                            Matahari adalah inti matahari (nomor 1), yang suhunya mencapai 27 juta °F
                                            (15 juta °C). Bagian Matahari yang kita sebut permukaannya – Fotosfer (nomor
                                            2) – bersuhu relatif dingin 10.000 °F (5.500 °C). Kromosfer (nomor 3)
                                            memancarkan cahaya kemerahan saat hidrogen yang sangat panas terbakar. Namun
                                            lingkaran merah tersebut hanya bisa dilihat saat terjadi gerhana matahari
                                            total. Di lain waktu, cahaya dari Kromosfer biasanya terlalu lemah untuk
                                            dilihat di Fotosfer yang lebih terang. Korona (nomor 4) membentuk mahkota
                                            putih yang indah ("corona" berarti mahkota dalam bahasa Latin dan Spanyol)
                                            dengan pita plasma menyempit ke luar, membentuk bentuk seperti kelopak
                                            bunga. Salah satu misteri terbesar Matahari adalah atmosfer terluar
                                            Matahari, yaitu Korona, yang semakin panas semakin jauh jaraknya dari
                                            permukaan. Korona mencapai suhu hingga 3,5 juta °F (2 juta °C) – jauh lebih
                                            panas daripada Fotosfer. Sumber panas Korona merupakan teka-teki besar yang
                                            belum terpecahkan dalam studi Matahari.</p>

                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/lbfQW3lQc7o?si=nzIMTCb9n9eaoA1N"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                        <div class="row">
                                            <h6 class="mb-4 mt-4 text-bold">Referensi</h6>
                                        </div>

                                        <div class="row" style="text-align: left;">
                                            <h6 class="text-bold">1. European Space Agency (ESA)</h6>
                                            <h6 class="text-bold">2. National Aeronautics and Space Administrations
                                                (NASA)</h6>
                                            <h6 class="text-bold">3. UniverseToday</h6>
                                            <h6 class="text-bold">4. roboguru.ruangguru.com</h6>
                                            <h6 class="text-bold">5. DW Indonesia</h6>
                                        </div>

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

            @foreach($glosariums as $glosarium)
            <div class="card mb-4" style="width: 18rem; background-color: #FFE793; cursor: pointer; text-align: center; overflow:hidden; margin-left: 20px;
    margin-right: 20px;" data-bs-toggle="modal" data-bs-target="#glosarium{{ $glosarium->id }}">
                <div class="d-inline mt-3" style="max-height:200px; max-width:200px; overflow:hidden; margin-left: auto;
    margin-right: auto;">
                    <img class="card-img-top" src="{{ asset('assets/assets/img/' . $glosarium->gambar) }}"
                        alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $glosarium->title }}</h5>
                    <div class="" style="max-height:100px; overflow:hidden;  --bs-border-opacity: 1;
            border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;">
                        <p class="card-text">{!! $glosarium->body !!}</p>
                    </div>
                </div>
                <div class="mb-3" style="--bs-border-opacity: 1;
            border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;">
                    <a href="#" class="btn btn-primary btn-sm d-inline">Read More</a>
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
                                        <img class="img-fluid rounded mb-5" style="max-width:30%;"
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
                            <a href="{{ route('glosariums.edit', $glosarium->id) }}"
                                class="btn btn-warning btn-sm mt-3">
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




<!-- Kak Astro Section-->
<section class="page-section portfolio" id="portfolio" style="background-image: url('assets/assets/img/nebula3.jpg');
    height: 90vh; overflow: auto;">
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
            Hubungi Kami.
            @else
            <a class="text-warning" href="/tanya">Hubungi Kami</a></big>.
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
            
            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal"
                    data-bs-target="#kakastro22">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>Mengapa Bumi Bisa Mengalami musim?</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/orbitbumi2.jpeg" alt="..." />
                </div>
            </div>
            
            <div class="col-md-5 col-lg-3 mb-4">
                <div class="portfolio-item mx-auto border border-light" data-bs-toggle="modal"
                    data-bs-target="#kakastro32">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i>Apakah Venus Memiliki Satelit Alami Seperti Bumi?</i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/assets/img/venus2.jpeg" alt="..." />
                </div>
            </div>

        </div> -->


        <div class="row justify-content-center">
            @foreach($kakastros as $kakastro)
            <div class="card mb-4" style="width: 18rem; background-color: #FFE793; cursor: pointer; text-align: center; overflow:hidden; margin-left: 20px;
    margin-right: 20px;" data-bs-toggle="modal" data-bs-target="#kakastro{{ $kakastro->id }}">
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