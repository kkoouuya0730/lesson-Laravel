<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'はじめての記事',
            'content' => 'これはSeederで作った記事です。',
        ]);

        Post::create([
            'title' => '2つ目の記事',
            'content' => 'LaravelのSeederでデータを登録しました。',
        ]);
    }
}
