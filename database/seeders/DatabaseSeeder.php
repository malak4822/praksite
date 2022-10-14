<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('thumbnailcontent')->insert([
            'author' => fake()->name(),
            'thumbnailURL' => 'https://image.shutterstock.com/image-photo/kitten-head-paws-peeking-over-260nw-1869172456.jpg', // password
            'submitted_by' => "submitted_by",
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //  \App\Models\User::factory(3)->create();



        // Ludzie::factory(3)->create();
        // Ludzie::create(
        //     [
        //         "imie" => "Kamil",
        //         "nazwisko" => "Malak",
        //         "wiek" => 17,
        //         "wzrost" => 180,
        //         "autyzm" => true,
        //     ]
        // );
    }
}
