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
                    <img class="card-img-top" src="assets/assets/img/venus2.jpeg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Venus</h5>
                    <div class="" style="max-height:100px; overflow:hidden;  --bs-border-opacity: 1;
            border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;">
                        <p class="card-text">Dewa Romawi Venus hampir seluruhnya sering disetarakan pada dewa
                            pembawa pesan Yunani, Hermes. Venus digambarkan dengan sendal bersayap yang membuatnya
                            mampu mengelilingi bumi dengan cepat. Namun, bagi orang Romawi, peran terpentingnya bukanlah
                            sebagai diplomat atau bahkan utusan para dewa. Venus adalah dewa perdagangan Romawi.
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

                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Venus
                                        </h2>

                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>

                                        <table style="width:100%; text-align: left;">
                                            <tr>
                                                <th rowspan="10"><img class="img-fluid rounded mb-5"
                                                        style="max-width:60%;" src="assets/assets/img/venus2.jpeg"
                                                        alt="..." /></th>
                                            </tr>
                                            <tr>
                                                <td width="180">Benda langit</td>
                                                <td width="200">: Planet</td>

                                            </tr>
                                            <tr>
                                                <td>Jarak Dari Matahari</td>
                                                <td>: 108 Juta Kilometer</td>

                                            </tr>
                                            <tr>
                                                <td>Diameter</td>
                                                <td>: 12.104 Kilometer</td>

                                            </tr>
                                            <tr>
                                                <td>Suhu Permukaan</td>
                                                <td>: 465 °C</td>

                                            </tr>
                                            <tr>
                                                <td>Massa(Bumi=1)</td>
                                                <td>: 4,87 x 10^24 kg</td>

                                            </tr>
                                            <tr>
                                                <td>Hari</td>
                                                <td>: 243 Hari Bumi</td>

                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>: 224,7 Hari Bumi</td>

                                            </tr>
                                            <tr>
                                                <td>Gravitasi(Bumi=1)</td>
                                                <td>: 8,87 m/s (91% Gravitasi Bumi)</td>

                                            </tr>
                                            <tr>
                                                <td>Bulan</td>
                                                <td>: Tidak Ada</td>

                                            </tr>
                                        </table>

                                        <div class="row">
                                            <h6 class="mb-4 mt-5 text-bold">Asal Nama</h6>
                                        </div>
                                        <img class="card-img-top mb-3" style="max-width:60%;"
                                            src="assets/assets/img/dewi_venus.jpg" alt="Card image cap">
                                        <div class="row">
                                            <h6 class="mb-1 text-bold">Lukisan Dewi Venus</h6>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-4 text-bold">Sumber: National Geographic Indonesia</h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Venus diambil dari nama dewi Romawi
                                            dan merupakan satu-satunya planet yang menggunakan nama perempuan. Venus
                                            adalah dewi cinta dan lambang kecantikan. Planet Venus mendapatkan nama ini
                                            karena tampilannya yang sangat terang. Keindahan planet ini menjadikannya
                                            pilihan yang wajar untuk dikaitkan dengan Venus, dewi yang dipuja karena
                                            pesona dan daya tariknya. Venus adalah benda langit paling terang ketiga
                                            setelah Matahari dan Bulan.
                                        </p>


                                        <div class="row">
                                            <h6 class="mb-4 mt-3 text-bold">Mengenal Venus</h6>
                                        </div>
                                        <iframe width="560" height="315"
                                            src="https://solarsystem.nasa.gov/gltf_embed/2343/?height=450&amp;rotate=true&amp;cc=true&amp;fs=true&amp;target=&amp;orbit="
                                            title=""
                                            class="smd-iframe-iframe margin-left-auto margin-right-auto border-0"
                                            allow="fullscreen">Unable to render the provided source</iframe>
                                        <div class="row">
                                            <h6 class="mb-1 text-bold">Model 3D Dimensi Atmosfer planet Venus</h6>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-4 text-bold">Sumber: NASA Visualization Technology
                                                Applications and Development (VTAD)</h6>
                                        </div>
                                        <div class="row" style="text-align: left;">
                                            <h6 class="mb-4 text-bold">Venus adalah planet kedua dari Matahari, dan
                                                planet tetangga terdekat kita. Ini adalah planet terpanas di tata surya
                                                kita, dan terkadang disebut sebagai kembaran Bumi.</h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Ukuran, massa, maupun materi yang
                                            membentuk Venus dan Bumi hampir sama. Diameter atau garis tengah planet
                                            Venus 12.104 km atau 650 km lebih kecil dari Bumi. Massa Venus juga hampir
                                            sama yakni 82% massa Bumi atau 4.868.000.000.000.000.000.000.000 kg atau
                                            dibaca 4,868 triliun triliun. Selain itu kedua planet sama-sama disusun oleh
                                            batuan. Karena massanya lebih kecil dari Bumi, gravitasi di Venus juga lebih
                                            kecil, yakni 8,87 m/s atau sekitar 91% gravitasi Bumi. Jika berat di Bumi
                                            100 kg, maka di Venus, berat tersebut menjadi 91 kg.</p>
                                        <p class="mb-4" syle="text-align=justify;">Jika kita berada di permukaan Venus,
                                            temperaturnya 465º C. Pada suhu sepanas itu, timah pun bisa meleleh.
                                            Atmosfernya yang tebal memerangkap panas dalam efek rumah kaca yang tak
                                            terkendali, menjadikannya planet terpanas di tata surya kita. Di bawah awan
                                            tebal dan persisten, permukaannya terdapat gunung berapi dan pegunungan yang
                                            berubah bentuk.
                                        </p>
                                        <p class="mb-4" syle="text-align=justify;">Akan tetapi, berada di Venus kita
                                            akan melalui hari yang sangat panjang. Bahkan sebelum satu hari berakhir
                                            satu tahun sudah terlewati. Waktu yang dibutuhkan Venus untuk mengelilingi
                                            Matahari lebih cepat dibanding kecepatan rotasinya. Venus hanya butuh 224,7
                                            hari untuk mengelilingi Matahari dan 243 hari untuk berputar pada sumbunya.
                                            Arah rotasi Venus berlawanan dengan Bumi dan planet lainnya di Tata Surya,
                                            karena diduga, Venus pernah ditabrak asteroid besar. Selain itu, Venus tidak
                                            memiliki satelit yang mengelilinginya.</p>



                                        <div class="row">
                                            <h6 class="mb-4 mt-4 text-bold">Struktur Venus</h6>
                                        </div>
                                        <iframe width="560" height="315"
                                            src="https://solarsystem.nasa.gov/gltf_embed/2342/?height=450&amp;rotate=true&amp;cc=true&amp;fs=true&amp;target=&amp;orbit="
                                            title=""
                                            class="smd-iframe-iframe margin-left-auto margin-right-auto border-0"
                                            allow="fullscreen">Unable to render the provided source</iframe>
                                        <div class="row">
                                            <h6 class="mb-1 text-bold">Model 3D Dimensi Permukaan planet Venus</h6>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-4 text-bold">Sumber: NASA Visualization Technology
                                                Applications and Development (VTAD)</h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Sama seperti Bumi, Venus adalah
                                            planet batuan. Komposisinya juga mirip Bumi. Lapisan terluar Venus adalah
                                            kerak silikat dan di dalamnya ada selubung batuan. Di bawah selubung batuan
                                            terdapat inti padat yang disusun oleh besi dan nikel. Permukaan Venus juga
                                            agak mirip Bumi. Ada gunung, lembah, dataran tinggi, juga gunung api. Di
                                            venus ada sungai lava cair dan lebih dari 1600 gunung api.</p>
                                        <p class="mb-4" syle="text-align=justify;">Jika kita bisa membagi Venus dan Bumi
                                            menjadi dua, kutub ke kutub, dan menempatkannya berdampingan, keduanya akan
                                            terlihat sangat mirip. Setiap planet mempunyai inti besi yang diselimuti
                                            oleh mantel batuan panas; kulit yang paling tipis membentuk kerak bagian
                                            luar yang berbatu. Di kedua planet tersebut, kulit tipis ini berubah bentuk
                                            dan terkadang meletus menjadi gunung berapi sebagai respons terhadap pasang
                                            surutnya panas dan tekanan jauh di bawah.</p>


                                        <div class="row">
                                            <h6 class="mb-4 mt-4 text-bold">Fakta Unik</h6>
                                        </div>

                                        <div class="row" style="text-align: left;">
                                            <h6 class="text-bold mb-3">1. Planet Venus merupakan benda langit paling
                                                terang di langit Bumi setelah Matahari dan Bulan.</h6>
                                            <h6 class="text-bold mb-3">2. Meski planet Merkurius merupakan planet
                                                terdekat dengan Matahari, Namun planet terpanas di Tata Surya justru
                                                planet Venus, planet kedua di Tata Surya setelah Mekurius. Suhu di
                                                permukaan planet Merkurius ketika siang hari mencapai 450ºC, sedangkan
                                                planet Venus mencapai suhu 465º C!</h6>
                                            <h6 class="text-bold mb-3">3. 1 hari di Venus lebih lambat dari 1 Tahun di
                                                Venus! Venus hanya butuh 224,7 hari untuk mengelilingi Matahari (1
                                                tahun) dan 243 hari untuk berputar pada sumbunya (1 hari).</h6>
                                            <h6 class="text-bold mb-3">4. Semua planet di Tata Surya berotasi berlawanan
                                                arah jarum jam, yakni terbit dari arah Timur dan terbenam di barat. Hal
                                                ini terkecuali planet Venus, yang berotasi searah jarum jam, yakni
                                                terbit dari barat dan tenggelam di timur!</h6>
                                        </div>


                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/irBGbF9aTO4?si=ZudeSa4QZSgbQrbW"
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
                                            <h6 class="text-bold">5. Sisi Terang</h6>
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