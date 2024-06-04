<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Glosarium;


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
                maxime. Porro itaque eaque soluta rem? Consequuntur!</p>',
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
        
        // Glosarium::factory(5)->create();
    }
    
}
