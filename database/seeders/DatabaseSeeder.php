<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        // User::create([
        //     'name'=>'satrio',
        //     'email' => 'gorio@gmail.com',
        //     'password' => bcrypt('1111')
        // ]);

        
        // User::create([
        //     'name'=>'alex',
        //     'email' => 'dominic@gmail.com',
        //     'password' => bcrypt('1111')
        // ]);

        User::factory(5)->create();

        // Category::create([
        //     'name'=>'Lemari dan Partisi',
        //     'slug' => 'lemari-dan-partisi'
        // ]);
        // Category::create([
        //     'name'=>'Kursi dan Meja',
        //     'slug' => 'kursi-dan-meja'
        // ]);
        // Category::create([
        //     'name'=>'Hiasan Dinding',
        //     'slug' => 'hiasan-dinding'
        // ]);
        // Category::create([
        //     'name'=>'Peralatan Dapur',
        //     'slug' => 'peralatan-dapur'
        // ]);
        // Category::create([
        //     'name'=>'Ranjang',
        //     'slug' => 'ranjang'
        // ]);
        // Category::create([
        //     'name'=>'Pintu dan Jendela',
        //     'slug' => 'pintu-dan-jendela'
        // ]);
       
        // Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima tempora incidunt expedita, perspiciatis eum ab hic ex consectetur atque. Est doloremque, eaque sed dolores, quo esse possimus, minima quam aspernatur aut iure earum nulla tenetur debitis illum soluta cupiditate! Possimus dolores tempora facere doloribus, sit asperiores eveniet perferendis animi reprehenderit.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title'=>'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima tempora incidunt expedita, perspiciatis eum ab hic ex consectetur atque. Est doloremque, eaque sed dolores, quo esse possimus, minima quam aspernatur aut iure earum nulla tenetur debitis illum soluta cupiditate! Possimus dolores tempora facere doloribus, sit asperiores eveniet perferendis animi reprehenderit.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title'=>'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima tempora incidunt expedita, perspiciatis eum ab hic ex consectetur atque. Est doloremque, eaque sed dolores, quo esse possimus, minima quam aspernatur aut iure earum nulla tenetur debitis illum soluta cupiditate! Possimus dolores tempora facere doloribus, sit asperiores eveniet perferendis animi reprehenderit.',
        //     'category_id' => 2 ,
        //     'user_id' => 1
        // ]);
        
    }
}
