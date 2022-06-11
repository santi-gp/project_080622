<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Post::factory(10)->create();
        /*$dataPost = [
            [
                'title' => 'El hobit',
                'description' => 'Un viaje inesperado',
                'name' => 'Bilbo',
                'phone' => '636000111',
                'age' => 60,
            ],
            [
                'title' => 'Te quiero así',
                'description' => 'música',
                'name' => 'Mark',
                'phone' => '666000111',
                'age' => 57,
            ]
        ];
        DB::table('posts')->insert($dataPost);*/
    }
}
