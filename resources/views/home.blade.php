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
                    <img class="card-img-top" src="assets/assets/img/merkurius.jpeg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Merkurius</h5>
                    <div class="" style="max-height:100px; overflow:hidden;  --bs-border-opacity: 1;
            border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;">
                        <p class="card-text">Dewa Romawi Merkurius hampir seluruhnya sering disetarakan pada dewa
                            pembawa pesan Yunani, Hermes. Merkurius digambarkan dengan sendal bersayap yang membuatnya
                            mampu mengelilingi bumi dengan cepat. Namun, bagi orang Romawi, peran terpentingnya bukanlah
                            sebagai diplomat atau bahkan utusan para dewa. Merkurius adalah dewa perdagangan Romawi.
                        </p>
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

                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Merkurius
                                        </h2>

                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>

                                        <table style="width:100%; text-align: left;">
                                            <tr>
                                                <th rowspan="10"><img class="img-fluid rounded mb-5"
                                                        style="max-width:60%;" src="assets/assets/img/merkurius.jpeg"
                                                        alt="..." /></th>
                                            </tr>
                                            <tr>
                                                <td width="180">Benda langit</td>
                                                <td width="200">: Planet</td>

                                            </tr>
                                            <tr>
                                                <td>Jarak Dari Matahari</td>
                                                <td>: 46.001.200 - 69.816.900 km</td>

                                            </tr>
                                            <tr>
                                                <td>Diameter</td>
                                                <td>: 4879 Kilometer</td>

                                            </tr>
                                            <tr>
                                                <td>Suhu Permukaan</td>
                                                <td>: –180ºC hingga 450ºC</td>

                                            </tr>
                                            <tr>
                                                <td>Massa(Bumi=1)</td>
                                                <td>: 3,3 x 10^23 kg</td>

                                            </tr>
                                            <tr>
                                                <td>Hari</td>
                                                <td>: 58 Hari Bumi</td>

                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>: 88 Hari Bumi</td>

                                            </tr>
                                            <tr>
                                                <td>Gravitasi(Bumi=1)</td>
                                                <td>: 3,7 m/s2 (38% gravitasi Bumi)</td>

                                            </tr>
                                            <tr>
                                                <td>Bulan</td>
                                                <td>: Tidak Ada</td>

                                            </tr>
                                        </table>

                                        <div class="row">
                                            <h6 class="mb-4 mt-3 text-bold">Asal Nama</h6>
                                        </div>
                                        <img class="card-img-top mb-3" style="max-width:60%;"
                                            src="assets/assets/img/dewa_merkurius.jpeg" alt="Card image cap">
                                        <div class="row">
                                            <h6 class="mb-1 text-bold">Lukisan Dewa Merkurius</h6>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-4 text-bold">Sumber: National Geographic Indonesia</h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Dewa Romawi Merkurius hampir
                                            seluruhnya sering disetarakan pada dewa pembawa pesan Yunani, Hermes.
                                            Merkurius digambarkan dengan sendal bersayap yang membuatnya mampu
                                            mengelilingi bumi dengan cepat. Namun, bagi orang Romawi, peran
                                            terpentingnya bukanlah sebagai diplomat atau bahkan utusan para dewa.
                                            Merkurius adalah dewa perdagangan Romawi.
                                        </p>
                                        <p class="mb-4" syle="text-align=justify;">Bahasa Latin memiliki banyak kata
                                            yang terkait erat dengan dewa perdagangan. Beberapa dari kata-kata ini telah
                                            diturunkan ke dalam penggunaan bahasa Inggris, melanjutkan pengaruh agama
                                            dan budaya Romawi di zaman modern. Ini termasuk planet MERKURIUS, dinamakan
                                            dari dewa yang tercepat karena kecepatannya mengorbit matahari.</p>

                                        <div class="row">
                                            <h6 class="mb-4 mt-3 text-bold">Mengenal Merkurius</h6>
                                        </div>
                                        <iframe width="560" height="315"
                                            src="https://solarsystem.nasa.gov/gltf_embed/2369/?height=450&amp;rotate=true&amp;cc=true&amp;fs=true&amp;target=&amp;orbit="
                                            title=""
                                            class="smd-iframe-iframe margin-left-auto margin-right-auto border-0"
                                            allow="fullscreen">Unable to render the provided source</iframe>
                                        <div class="row">
                                            <h6 class="mb-1 text-bold">Model 3D Dimensi Merkurius</h6>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-4 text-bold">Sumber: NASA Visualization Technology
                                                Applications and Development (VTAD)</h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Planet terkecil di tata surya kita
                                            dan terdekat dengan matahari, Merkurius hanya sedikit lebih besar dari bulan
                                            Bumi. Merkurius terbentuk sekitar 4,5 miliar tahun yang lalu ketika
                                            gravitasi menarik gas berputar -putar dan debu untuk membentuk planet kecil
                                            ini terdekat dengan Matahari. Dari permukaan Merkurius, Matahari akan muncul
                                            lebih dari tiga kali lebih besar ketika dilihat dari Bumi, dan sinar
                                            Matahari akan sebanyak tujuh kali lebih cerah.</p>
                                        <p class="mb-4" syle="text-align=justify;">Suhu permukaan Merkurius sangat panas
                                            dan dingin. Karena planet ini sangat dekat dengan matahari, suhu hari dapat
                                            mencapai tertinggi 800 ° F (430 ° C). Tanpa atmosfer untuk mempertahankan
                                            panas itu di malam hari, suhu dapat mencelupkan serendah -290 ° F (-180 °
                                            C). Terlepas dari kedekatannya dengan matahari, Merkurius bukanlah planet
                                            terpanas di tata surya kita - judul itu milik Venus di dekatnya, berkat
                                            atmosfernya yang padat. Tapi Merkurius adalah planet tercepat, mengitari di
                                            sekitar matahari setiap 88 hari Bumi sekali.</p>




                                        <div class="row">
                                            <h6 class="mb-4 mt-4 text-bold">Struktur Merkurius</h6>
                                        </div>
                                        <img class="card-img-top mb-3" style="max-width:100%;"
                                            src="assets/assets/img/struktur_merkurius.webp" alt="Card image cap">
                                        <div class="row">
                                            <h6 class="mb-1 text-bold">Lapisan-lapisan dalam Merkurius</h6>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-4 text-bold">Sumber: Langit Selatan</h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Merkurius adalah planet terpadat
                                            kedua, setelah Bumi. Ini memiliki inti logam besar dengan radius sekitar
                                            1.289 mil (2.074 kilometer), sekitar 85% dari radius planet ini. Ada bukti
                                            bahwa sebagian cair atau cair. Cangkang luar Mercury, sebanding dengan
                                            cangkang luar Bumi (disebut mantel dan kerak), hanya sekitar 400 kilometer
                                            (250 mil).</p>
                                        <p class="mb-4" syle="text-align=justify;">Permukaan Merkurius memiliki
                                            kemiripan dengan Bulan. Ada banyak kawah yang menutupi permukaan planet
                                            tersebut. Kawah terbentuk dari tabrakan meteorit ketika Merkurius masih
                                            muda, sekitar 4 miliar tahun lalu. Ukuran kawah yang terbentuk juga beragam
                                            dari kawah kecil seukuran mangkuk sampai kawah yang ukurannya setengah
                                            diameter Merkurius.</p>
                                        <p class="mb-4" syle="text-align=justify;">Inti besi ini terbagi dua yakni inti
                                            dalam yang padat, dan inti luar yang cair. Di luar inti besi, terdapat
                                            selubung silikat setebal 500–700 km. Menariknya, ketika Merkurius masih
                                            muda, lapisan silikat tersebut berwujud cair dan merupakan sumber letusan
                                            atau erupsi vulkanik. Akan tetapi, selubung silikat tersebut sudah mendingin
                                            dan memadat, dan tentu saja aktivitas vulaknik juga sudah berakhir sejak 3,5
                                            miliar tahun lalu. Di atas selubung silikat, ada permukaan batuan setebal 35
                                            km. Di kutub-kutub Merkurius, terdapat air es abadi karena lokasi es ini
                                            tidak pernah menerima cahaya Matahari.</p>

                                        <div class="row">
                                            <h6 class="mb-4 mt-4 text-bold">Fakta Unik</h6>
                                        </div>

                                        <div class="row" style="text-align: left;">
                                            <h6 class="text-bold mb-3">1. Planet Merkurius merupakan planet tercepat di Tata
                                                Surya. Kecepatan Merkurius mengelilingi matahari setiap 88 hari Bumi,
                                                meluncur dengan kecepatan hampir 29 mil (47 Km) per detik, lebih cepat
                                                daripada planet lain di tata surya.</h6>
                                            <h6 class="text-bold mb-3">2. Meski planet Merkurius merupakan planet terdekat
                                                dengan Matahari, Namun planet terpanas di Tata Surya justru planet
                                                Venus, planet kedua di Tata Surya setelah Mekurius.</h6>
                                        </div>


                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/lC-qxFGrm5c?si=IR8ep014gDutt2m_"
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
                                            <h6 class="text-bold">3. Kompas</h6>
                                            <h6 class="text-bold">4. Langit Selatan</h6>
                                            <h6 class="text-bold">5. DW Indonesia</h6>
                                            <h6 class="text-bold">6. National Geographic Indonesia</h6>
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
                                        <!-- <img class="img-fluid rounded mb-5" style="max-width:30%;"
                                            src="{{ asset('assets/assets/img/' . $glosarium->gambar) }}" alt="..." /> -->
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