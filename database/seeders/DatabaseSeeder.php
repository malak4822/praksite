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
        //                  1
        DB::table('thumbnailContent')->insert([
            'author' => fake()->name(),
            'thumbnailURL' => fake()->imageUrl(), // password
            'submitted_by' => "submitted by",
        ]);

        //                  2
        DB::table('thumbnailContent')->insert([
            'author' => fake()->name(),
            'thumbnailURL' => fake()->imageUrl(), // password
            'submitted_by' => "submitted by",
        ]);

        //                  3
        DB::table('thumbnailContent')->insert([
            'author' => fake()->name(),
            'thumbnailURL' => fake()->imageUrl(), // password
            'submitted_by' => "submitted by",
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
