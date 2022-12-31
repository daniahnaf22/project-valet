<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Jurusan;
use App\Models\Category;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();
        
        Category::create([
            'name' => 'Project Web',
            'slug' => 'project-web'
        ]);
        Category::create([
            'name' => 'Basis Data',
            'slug' => 'basis-data'
       ]);
        
        Post::factory(10)->create();

        Jurusan::create([
            'name' => 'Teknologi Informasi',
            'slug' => 'teknologi-informasi'
        ]);
        Jurusan::create([
            'name' => 'Teknik Sipil',
            'slug' => 'teknik-sipil'
        ]);

        Mahasiswa::factory(5)->create();
        Dosen::factory(5)->create();

       /* User::create([
            'name' => 'Danny Utama',
            'email' => 'dannyutama@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Eko Yulianto',
            'email' => 'eko@gmail.com',
            'password' => bcrypt('123456')
        ]);

        Post::create([
            'title' =>'Judul Kedua',
            'slug' =>'judul-kedua',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aspernatur quae nam soluta repellat fuga dolor velit quas. 
            Ea natus',
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aspernatur',
            'category_id' =>2,
            'user_id' =>1
        ]);

        Post::create([
            'title' =>'Judul Ketiga',
            'slug' =>'judul-ketiga',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aspernatur quae nam soluta repellat fuga dolor velit quas',
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aspernatur',
            'category_id' =>2,
            'user_id' =>2
        ]);

        Post::create([
            'title' =>'Judul Keempat',
            'slug' =>'judul-keempat',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aspernatur quae nam soluta repellat fuga dolor velit quas',
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Aspernatur',
            'category_id' =>2,
            'user_id' =>3
        ]); */
    }
}
