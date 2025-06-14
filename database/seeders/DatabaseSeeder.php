<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        Author::factory(4)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Game',
            'slug' => 'game',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Post Satu',
        //     'slug' => 'post-satu',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, soluta!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga atque ipsam quo. Suscipit quae id a itaque. Quidem similique earum dolor quae suscipit laboriosam dicta voluptatum facere cupiditate porro sunt libero assumenda qui, natus architecto neque hic placeat maxime illum, aperiam voluptas! Repellendus nam accusamus impedit, maxime illum cum iure laborum temporibus et illo eum reprehenderit consequuntur placeat minima facilis consequatur enim a reiciendis dolore. Totam officia labore tenetur sapiente culpa, corporis at optio amet temporibus! Ad pariatur laudantium ipsam dolor veniam labore illum architecto id odio temporibus facilis, itaque adipisci reiciendis eaque nisi at ut a! Excepturi quibusdam nobis magni eum eius nulla nisi amet perferendis vitae quae? Expedita natus corporis non eum accusantium tempora veritatis alias modi consequuntur?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Post Dua',
        //     'slug' => 'post-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, soluta!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga atque ipsam quo. Suscipit quae id a itaque. Quidem similique earum dolor quae suscipit laboriosam dicta voluptatum facere cupiditate porro sunt libero assumenda qui, natus architecto neque hic placeat maxime illum, aperiam voluptas! Repellendus nam accusamus impedit, maxime illum cum iure laborum temporibus et illo eum reprehenderit consequuntur placeat minima facilis consequatur enim a reiciendis dolore. Totam officia labore tenetur sapiente culpa, corporis at optio amet temporibus! Ad pariatur laudantium ipsam dolor veniam labore illum architecto id odio temporibus facilis, itaque adipisci reiciendis eaque nisi at ut a! Excepturi quibusdam nobis magni eum eius nulla nisi amet perferendis vitae quae? Expedita natus corporis non eum accusantium tempora veritatis alias modi consequuntur?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Post Tiga',
        //     'slug' => 'post-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, soluta!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga atque ipsam quo. Suscipit quae id a itaque. Quidem similique earum dolor quae suscipit laboriosam dicta voluptatum facere cupiditate porro sunt libero assumenda qui, natus architecto neque hic placeat maxime illum, aperiam voluptas! Repellendus nam accusamus impedit, maxime illum cum iure laborum temporibus et illo eum reprehenderit consequuntur placeat minima facilis consequatur enim a reiciendis dolore. Totam officia labore tenetur sapiente culpa, corporis at optio amet temporibus! Ad pariatur laudantium ipsam dolor veniam labore illum architecto id odio temporibus facilis, itaque adipisci reiciendis eaque nisi at ut a! Excepturi quibusdam nobis magni eum eius nulla nisi amet perferendis vitae quae? Expedita natus corporis non eum accusantium tempora veritatis alias modi consequuntur?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
