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
                'judul' => 'Mengapa Gerhana Matahari dan Bulan Bisa Terjadi',
            ]
        );

        Tanya::create(
            [
                'nama' => 'Noah Hanis',
                'email' => 'noah@email.com',
                'handphone' => '082359993841',
                'judul' => 'Mengapa Bumi bisa Mengalami Musim',
            ]
        );

        Tanya::create(
            [
                'nama' => 'Alif Azani',
                'email' => 'alif@email.com',
                'handphone' => '082353139941',
                'judul' => 'Apakah Venus Memiliki Satelit Alami Seperti Bumi',
            ]
        );

        Glosarium::create(

            [
                'title' => 'Bintang',
                'gambar' => 'bintang.jpeg', // URL gambar dummy
                'body' => '<p class="mb-4">Bintang adalah benda langit yang bisa mengeluarkan cahaya Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Modi, a fugiat id quos harum eligendi
                quo facilis illo voluptatibus sunt.</p>
                <p class="mb-4">Bintang adalah benda langit yang bisa mengeluarkan cahaya Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Modi, a fugiat id quos harum eligendi
                quo facilis illo voluptatibus sunt dolores, aspernatur cumque maxime. Porro itaque
                eaque soluta rem? Consequuntur!</p>',
                'published_at' => now(),

            ]
        );
        Glosarium::create(
           
            [
                'title' => 'Matahari',
                'gambar' => 'matahari.jpeg', // URL gambar dummy
                'body' => '<p class="mb-4" syle="text-align=justify;">Matahari adalah bintang yang berada di pusat
                tata suryaLorem ipsum dolor sit amet consectetur adipisicing elit. Modi, a fugiat id
                quos harum eligendi quo facilis illo voluptatibus sunt dolores, aspernatur cumque
                maxime. Porro itaque eaque soluta rem? Consequuntur!</p>
                
                <iframe src="https://solarsystem.nasa.gov/gltf_embed/2352/?height=450&amp;amp;rotate=true&amp;amp;cc=true&amp;amp;fs=true&amp;amp;target=&amp;amp;orbit=" title="" class="smd-iframe-iframe margin-left-auto margin-right-auto border-0" allow="fullscreen">Unable to render the provided source</iframe>',
                
                
                'published_at' => now(),

            ]
        );
        Glosarium::create(
           
            [
                'title' => 'Alam Semesta',
                'gambar' => 'nebula-2.jpg', // URL gambar dummy
                'body' => '<p class="mb-4">Alam Semesta adalah benda langit yang bisa mengeluarkan cahaya Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Modi, a fugiat id quos harum
                eligendi quo facilis illo voluptatibus sunt.</p>
            <p class="mb-4">Bintang adalah benda langit yang bisa mengeluarkan cahaya Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Modi, a fugiat id quos harum eligendi
                quo facilis illo voluptatibus sunt dolores, aspernatur cumque maxime. Porro itaque
                eaque soluta rem? Consequuntur!</p>',
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
                'title' => 'Mengapa Bumi Bisa Mengalami musim?',
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
        
        // Glosarium::factory(5)->create();
    }
    
}
