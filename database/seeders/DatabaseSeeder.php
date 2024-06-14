<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Glosarium;
use App\Models\Kakastro;
use App\Models\Tanya;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        

        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
        );

        Tanya::create(
            [
                'nama' => 'Yusuf Johan Kelana',
                'email' => 'yusufjk@email.com',
                'handphone' => '082353133841',
                'judul' => 'Mengapa Gerhana Matahari dan Bulan Bisa Terjadi?',
            ]
        );

        Tanya::create(
            [
                'nama' => 'Noah Hanis',
                'email' => 'noah@email.com',
                'handphone' => '082359993841',
                'judul' => 'Mengapa Bumi bisa Mengalami Musim?',
            ]
        );

        Tanya::create(
            [
                'nama' => 'Alif Azani',
                'email' => 'alif@email.com',
                'handphone' => '082353139941',
                'judul' => 'Apakah Venus Memiliki Satelit Alami Seperti Bumi?',
            ]
        );
        Tanya::create(
            [
                'nama' => 'Arif',
                'email' => 'arif@email.com',
                'handphone' => '082353135551',
                'judul' => 'Mengapa Pluto tidak disebut planet?',
            ]
        );
        Tanya::create(
            [
                'nama' => 'Mulla',
                'email' => 'mulla@email.com',
                'handphone' => '082366135551',
                'judul' => 'Apa Itu Galaksi?',
            ]
        );

        // Glosarium::create(

        //     [
        //         'title' => 'Bintang',
        //         'gambar' => 'bintang.jpeg', // URL gambar dummy
        //         'body' => '<p class="mb-4">Bintang adalah benda langit yang bisa mengeluarkan cahaya Lorem ipsum
        //         dolor sit amet consectetur adipisicing elit. Modi, a fugiat id quos harum eligendi
        //         quo facilis illo voluptatibus sunt.</p>
        //         <p class="mb-4">Bintang adalah benda langit yang bisa mengeluarkan cahaya Lorem ipsum
        //         dolor sit amet consectetur adipisicing elit. Modi, a fugiat id quos harum eligendi
        //         quo facilis illo voluptatibus sunt dolores, aspernatur cumque maxime. Porro itaque
        //         eaque soluta rem? Consequuntur!</p>',
        //         'published_at' => now(),

        //     ]
        // );
        //matahari
        Glosarium::create(
           
            [
                'title' => 'Matahari',
                'gambar' => 'matahari.jpeg', // URL gambar dummy
                'body' => '<table style="width:100%; text-align: left;">
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
                                        </div>',
                
                
                'published_at' => now(),

            ]
        );
        //merkurius
        Glosarium::create(
           
            [
                'title' => 'Merkurius',
                'gambar' => 'merkurius.jpeg', // URL gambar dummy
                'body' => '<table style="width:100%; text-align: left;">
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
                                        </div>',
                
                
                'published_at' => now(),

            ]
        );
        //venus
        Glosarium::create(
           
            [
                'title' => 'Venus',
                'gambar' => 'venus2.jpeg', // URL gambar dummy
                'body' => '<table style="width:100%; text-align: left;">
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
                                        </div>',
                
                
                'published_at' => now(),

            ]
        );
        //bumi
        Glosarium::create(
           
            [
                'title' => 'Bumi',
                'gambar' => 'bumi.jpeg', // URL gambar dummy
                'body' => '<table style="width:100%; text-align: left;">
                                            <tr>
                                                <th rowspan="10"><img class="img-fluid rounded mb-5"
                                                        style="max-width:60%;" src="assets/assets/img/bumi.jpeg"
                                                        alt="..." /></th>
                                            </tr>
                                            <tr>
                                                <td width="180">Benda langit</td>
                                                <td width="200">: Planet</td>

                                            </tr>
                                            <tr>
                                                <td>Jarak Dari Matahari</td>
                                                <td>: 150 Juta Kilometer</td>

                                            </tr>
                                            <tr>
                                                <td>Diameter</td>
                                                <td>: 12.756 Kilometer</td>

                                            </tr>
                                            <tr>
                                                <td>Suhu Permukaan</td>
                                                <td>: 15 °C</td>

                                            </tr>
                                            <tr>
                                                <td>Massa</td>
                                                <td>: 5,98 x 10^24 kg</td>

                                            </tr>
                                            <tr>
                                                <td>Hari</td>
                                                <td>: 23 jam 56 menit</td>

                                            </tr>
                                            <tr>
                                                <td>Tahun</td>
                                                <td>: 365,25 hari</td>

                                            </tr>
                                            <tr>
                                                <td>Gravitasi</td>
                                                <td>: 9,8 m/s2</td>

                                            </tr>
                                            <tr>
                                                <td>Satlit Alami</td>
                                                <td>: Bulan</td>

                                            </tr>
                                        </table>

                                        <div class="row">
                                            <h6 class="mb-4 mt-3 text-bold">Asal Nama</h6>
                                        </div>

                                        <p class="mb-4" syle="text-align=justify;">Bumi adalah satu-satunya planet di
                                            tata surya yang nama bahasa Inggris maupun Indonesianya tidak berasal dari
                                            mitologi Yunani atau Romawi. Earth bahasa Inggris dari planet Bumi
                                            tersebut diambil dari bahasa Inggris Kuno dan Jermanik, yakni Ertha atau
                                            Eorthe yang berarti "tanah". Tentu saja ada banyak nama untuk planet kita
                                            dalam ribuan bahasa yang digunakan oleh penduduk planet ketiga dari Matahari
                                            tersebut.
                                        </p>
                                        <p class="mb-4" syle="text-align=justify;">Lalu dari mana kata BUMI dalam
                                            bahasa Indonesia berasal? Penyebutan Bumi dalam bahasa Indonesia berasal
                                            dari bahasa Sanskerta yaitu Bhumi yang artinya tanah. Untuk nama yang satu
                                            ini tentu tidak jadi masalah dan mungkin cukup mudah bagi kita untuk
                                            memahaminya. Menurut Kamus Besar Bahasa Indonesia (KBBI), BUMI adalah planet
                                            ke-3 dari Matahari, tempat manusia hidup; dunia; jagat; permukaan dunia;
                                            tanah.
                                        </p>

                                        <div class="row">
                                            <h6 class="mb-4 mt-3 text-bold">Mengenal Bumi</h6>
                                        </div>
                                        <iframe width="590" height="345"
                                            src="https://eyes.nasa.gov/apps/earth/?embed=true#/"
                                            title=""
                                            class="smd-iframe-iframe margin-left-auto margin-right-auto border-0"
                                            allow="fullscreen">Unable to render the provided source</iframe>
                                        <div class="row">
                                            <h6 class="mb-1 text-bold">Observasi Peristiwa di Bumi dari Luar Angkasa melalui satelit-satelit NASA</h6>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-4 text-bold">Sumber: NASA</h6>
                                        </div>
                                        <div class="row" style="text-align: left;">
                                            <h6 class="mb-4 text-bold">Bumi – planet rumah kita – adalah planet ketiga
                                                dari Matahari, dan planet terbesar kelima. Planet ini satu-satunya
                                                tempat yang kita tahu dihuni oleh makhluk hidup.
                                            </h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Meskipun Bumi hanyalah planet
                                            terbesar kelima di tata surya, bumi adalah satu-satunya dunia di tata surya
                                            kita yang memiliki air cair di permukaannya. Hanya sedikit lebih besar dari
                                            Venus di dekatnya, Bumi adalah planet terbesar dari empat planet yang paling
                                            dekat dengan Matahari, yang semuanya terbuat dari batu dan logam.
                                        </p>
                                        <p class="mb-4" syle="text-align=justify;">Bumi memiliki suhu yang sangat
                                            bersahabat dan campuran bahan kimia yang membuat kehidupan berlimpah di
                                            sini. Yang paling menonjol, Bumi memiliki keunikan karena sebagian besar
                                            planet kita tertutup air cair, karena suhunya memungkinkan air cair ada
                                            dalam jangka waktu yang lama. Diperkirakan, 71% permukaan Bumi adalah lautan
                                            sedangkan daratan hanya 29%. Dari seluruh air yang ada di Bumi, 97% adalah
                                            air asin dan hanya ada 3% air tawar. Lautan luas di bumi menyediakan tempat
                                            yang nyaman untuk memulai kehidupan sekitar 3,8 miliar tahun yang lalu.</p>




                                        <div class="row">
                                            <h6 class="mb-4 mt-4 text-bold">Struktur bumi</h6>
                                        </div>
                                        <img class="card-img-top mb-3" style="max-width:100%;"
                                            src="assets/assets/img/struktur_bumi.webp" alt="Card image cap">
                                        <div class="row">
                                            <h6 class="mb-1 text-bold">Lapisan-lapisan dalam bumi</h6>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-4 text-bold">Sumber: Langit Selatan</h6>
                                        </div>
                                        <div class="row" style="text-align: left;">
                                            <h6 class="mb-4 text-bold">Bumi terdiri dari empat lapisan utama, dimulai
                                                dengan inti dalam di pusat planet, diselimuti oleh inti luar, mantel,
                                                dan kerak bumi.
                                            </h6>
                                        </div>
                                        <p class="mb-4" syle="text-align=justify;">Inti bagian dalam adalah bola padat
                                            yang terbuat dari logam besi dan nikel dengan radius sekitar 759 mil (1.221
                                            kilometer). Di sana suhunya mencapai 9.800 derajat Fahrenheit (5.400 derajat
                                            Celcius). Yang mengelilingi inti dalam adalah inti luar. Lapisan ini
                                            tebalnya sekitar 1.400 mil (2.300 kilometer), terbuat dari cairan besi dan
                                            nikel.</p>
                                        <p class="mb-4" syle="text-align=justify;">Di antara inti luar dan kerak bumi
                                            terdapat mantel, lapisan paling tebal. Campuran batuan cair yang panas dan
                                            kental ini memiliki ketebalan sekitar 1.800 mil (2.900 kilometer) dan
                                            memiliki konsistensi karamel. Lapisan terluar, kerak bumi, rata-rata
                                            memiliki kedalaman sekitar 19 mil (30 kilometer) di daratan. Di dasar
                                            lautan, kerak bumi lebih tipis dan memanjang sekitar 3 mil (5 kilometer)
                                            dari dasar laut hingga puncak mantel.</p>
                                        <p class="mb-4" syle="text-align=justify;">Bumi juga punya lapisan gas yang
                                            cukup tebal yang kita kenal sebagai atmosfer. Lapisan atmosfer Bumi kaya
                                            dengan gas nitrogen dan oksigen. Jika di Venus kehadiran atmosfer karbon
                                            dioksida membuat planet tersebut jadi sangat panas, atmosfer Bumi justru
                                            memegang peran penting untuk menjaga temperatur permukaan tetap hangat.
                                            Selain itu, atmosfer juga berfungsi sebagai perisai yang melindungi Bumi
                                            dari meteoroid.</p>
                                        <div class="row" style="text-align: left;">
                                            <h6 class="mb-4 text-bold">Tanpa atmosfer, laut membeku dan kehidupan pun
                                                tak pernah bisa bertahan.
                                            </h6>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-4 mt-4 text-bold">Fakta Unik</h6>
                                        </div>

                                        <div class="row" style="text-align: left;">
                                            <h6 class="text-bold mb-3">Bumi merupakan satu-satunya planet di Tata Surya
                                                (dan mungkin di Alam Semesta) yang menjadi rumah bagi makhluk hidup
                                                dengan kondisi suhu dan air yang cukup untuk kehidupan bisa berkembang.
                                            </h6>

                                        </div>


                                        <iframe width="560" height="315"
                                            src="https://www.youtube.com/embed/eueHdEOoEB8?si=scpAQzgJW8W5jSZ2"
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
                                            <h6 class="text-bold">3. Sisi Terang</h6>
                                            <h6 class="text-bold">4. DW Indonesia</h6>
                                            <h6 class="text-bold">5. National Geographic Indonesia</h6>
                                        </div>',
                'published_at' => now(),

            ]
        );

        Kakastro::create(
           
            [
                'title' => 'Mengapa Gerhana Matahari dan Bulan Bisa Terjadi?',
                'gambar' => 'gerhanaM.jpeg', // URL gambar dummy
                
                'body' => '<p class="mb-4" style="text-align:justify;">Gerhana matahari terjadi ketika
                posisi bulan terletak di antara bumi dan
                matahari sehingga terlihat menutup sebagian atau seluruh cahaya matahari di langit
                bumi.</p>
            <div class="text-center">
                <img class="rounded mb-4" style="max-width:30%;"
                    src="assets/assets/img/gerhanaM.jpeg" alt="..." />
                <img class="rounded mb-4" style="max-width:40%;"
                    src="assets/assets/img/observasi.jpeg" alt="..." />
            </div>
            <div class="row">
                <h6 class="mb-4">Peristiwa Gerhana Matahari di Meksiko, 8 April 2024</h6>
            </div>
            <p class="mb-4" style="text-align:justify;">Berdasarkan cara tertutupnya matahari,
                terdapat empat jenis
                gerhana matahari: gerhana matahari total, gerhana matahari cincin, gerhana matahari
                sebagian, dan gerhana matahari hibrida/campuran. Walaupun bulan berukuran sekitar
                400 kali lebih kecil daripada matahari, bulan terletak sekitar 400 kali lebih dekat
                ke bumi sehingga kedua benda langit ini tampak hampir sama besar di langit bumi.
                Karena orbit bulan berbentuk elips, jaraknya dari bumi sedikit berubah-ubah sehingga
                kadang tampak lebih besar dan mampu menutupi matahari (menyebabkan gerhana total)
                atau kadang lebih kecil dan hanya dapat menyebabkan gerhana matahari cincin.</p>


            <div class="text-center">
                <img class="rounded mb-4" style="max-width:30%;"
                    src="assets/assets/img/gerhanaB.jpeg" alt="..." />
                <img class="rounded mb-4" style="max-width:40%;"
                    src="assets/assets/img/fasegerhanaB.jpeg" alt="..." />
            </div>
            <div class="row">
                <h6 class="mb-4 text-bold">Peristiwa Gerhana Bulan di Yogyakarta, 15 April 2014</h6>
            </div>
            <p class="mb-4" style="text-align:justify;">Gerhana Bulan terjadi ketika Bulan terutup
                oleh bayangan Bumi. Peristiwa
                ini hanya dapat terjadi ketika posisi Matahari, Bumi, dan Bulan tepat atau hampir
                membentuk garis lurus dan Bulan berada dalam fase Bulan purnama. Jenis dan durasi
                gerhana Bulan bergantung pada jarak Bulan terhadap simpulnya di orbit.</p>',
                'published_at' => now(),

            ]
        );

        Kakastro::create(
           

            [
                'title' => 'Mengapa Bumi bisa Mengalami Musim?',
                'gambar' => 'orbitbumi2.jpeg', // URL gambar dummy
                
                'body' => '<p class="mb-4" style="text-align:justify;">Musim adalah pembagian berdasarkan
                                    perubahan cuaca, ekologi, dan banyaknya waktu cahaya matahari di suatu wilayah. Di
                                    Bumi, musim adalah hasil dari paralelisme aksial orbit Bumi yang miring mengelilingi
                                    Matahari. Di daerah beriklim sedang dan kutub, musim ditandai dengan perubahan
                                    intensitas sinar matahari yang mencapai permukaan Bumi, variasi yang dapat
                                    menyebabkan hewan mengalami hibernasi atau bermigrasi, dan tumbuh-tumbuhan menjadi
                                    tidak aktif. Berbagai budaya mendefinisikan jumlah dan sifat musim berdasarkan
                                    variasi regional, dan dengan demikian ada sejumlah budaya modern dan historis yang
                                    memiliki jumlah musim yang bervariasi.</p>
                                <div class="text-center">
                                    <img class="rounded mb-4" style="max-width:30%;"
                                        src="assets/assets/img/orbitbumi2.jpeg" alt="..." />

                                </div>
                                <div class="row">
                                    <h6 class="mb-4">Siklus Perubahan 4 Musim di belahan bumi selatan</h6>
                                </div>
                                <p class="mb-4" style="text-align:justify;">Belahan Bumi utara mengalami sebagian besar
                                    sinar matahari langsung selama bulan Mei, Juni, dan Juli, karena belahan bumi ini
                                    menghadap ke arah Matahari. Hal yang sama juga terjadi di belahan Bumi selatan pada
                                    bulan November, Desember, dan Januari. Kemiringan aksial Bumi yang menyebabkan
                                    Matahari lebih tinggi di langit selama bulan-bulan musim panas, yang
                                    meningkatkan penyinaran surya. Namun, karena jeda musiman, Juni, Juli, dan Agustus
                                    adalah bulan-bulan terpanas di Belahan Bumi Utara, sedangkan Desember, Januari, dan
                                    Februari adalah bulan-bulan terpanas di belahan Bumi selatan.</p>',
                'published_at' => now(),

            ]
        );

        Kakastro::create(
           

            [
                'title' => 'Apakah Venus Memiliki Satelit Alami Seperti Bumi?',
                'gambar' => 'venus2.jpeg', // URL gambar dummy
                
                'body' => '<p class="mb-4" style="text-align:justify;">Planet di tata surya memiliki satelit yang
                mengelilinginya. Seperti bulan yang merupakan satelit alami bumi. Namun di tata
                surya kita, ada dua planet yang tidak memiliki satelit alami yakni Merkurius dan
                Venus. Mengapa begitu? Dikutip dari situs National Aeronautics and Space
                Administration (NASA), ada alasan khusus yang mendasari mengapa dua planet ini tidak
                memiliki satelit alami. Planet Merkurius merupakan planet yang paling dekat dengan
                matahari. Kira-kira jaraknya 57,9 juta km dari matahari. Karena jaraknya yang sangat
                dekat dengan matahari, hal ini membuat gaya gravitasi matahari lebih tinggi
                dibanding gaya gravitasi planet Merkurius
            </p>
            <div class="text-center">
                <img class="rounded mb-4" style="max-width:30%;" src="assets/assets/img/venus2.jpeg"
                    alt="..." />
                <img class="rounded mb-4" style="max-width:50%;"
                    src="assets/assets/img/venusnomoon.jpg" alt="..." />
            </div>
            <div class="row">
                <h6 class="mb-4">Tidak ditemukannya satelit alami di planet Venus</h6>
            </div>
            <p class="mb-4" style="text-align:justify;">Gaya gravitasi matahari yang lebih besar
                dibanding planet Merkurius ini menyebabkan tidak adanya satelit alami yang bisa
                mengorbit dan stabil selama bertahun-tahun di sekitar planet Merkurius. Sedangkan
                untuk planet Venus yang tidak memiliki satelit alami, salah satu alasannya juga
                dikarenakan jarak yang cukup dekat dengan matahari. Selain itu, adanya perubahan
                rotasi dari planet Venus juga berpengaruh pada hal ini. Menurut teori yang beredar,
                dahulu ada sebuah satelit alami yang bergerak memutari planet Venus. Namun, karena
                adanya benturan satelit tersebut pecah menjadi beberapa bagian. Kemudian terjadi
                benturan lagi yang menyebabkan arah rotasi planet Venus berubah. Hal inilah yang
                menyebabkan mengapa planet Venus tidak memiliki satelit alami.
            </p>',
                'published_at' => now(),

            ]
        );
        
        // Tanya::factory(3)->create();
        // Kakastro::factory(3)->create();
    }
    
}
