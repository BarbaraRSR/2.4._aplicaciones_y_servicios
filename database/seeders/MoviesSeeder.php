<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'Harry Potter y la piedra filosofal',
            'synopsis' => 'Un niño que descubre que es un mago.',
            'year' => '2007',
            'cover' => 'unk',
        ]);

        DB::table('movies')->insert([
            'title' => 'Película 2',
            'synopsis' => 'La segunda sinopsis.',
            'year' => '2008',
            'cover' => 'Cover 2',
        ]);

        DB::table('movies')->insert([
            'title' => 'Tecrer película',
            'synopsis' => 'La tercer sinopsis.',
            'year' => '2009',
            'cover' => 'Cover 3',
        ]);

        DB::table('movies')->insert([
            'title' => 'La cuarta es la vencida',
            'synopsis' => 'La cuarta sinopsis.',
            'year' => '2010',
            'cover' => 'Cover 4',
        ]);

        DB::table('movies')->insert([
            'title' => 'Fifth Movie',
            'synopsis' => 'La quinta sinopsis.',
            'year' => '2011',
            'cover' => 'Cover 5',
        ]);

        DB::table('movies')->insert([
            'title' => 'Ya van seis',
            'synopsis' => 'La sexta sinopsis.',
            'year' => '2012',
            'cover' => 'Cover 6',
        ]);

        DB::table('movies')->insert([
            'title' => 'Siete películas',
            'synopsis' => 'La séptima sinopsis.',
            'year' => '2013',
            'cover' => 'Cover 7',
        ]);

        DB::table('movies')->insert([
            'title' => 'Faltan dos',
            'synopsis' => 'La octava sinopsis.',
            'year' => '2014',
            'cover' => 'Cover 8',
        ]);

        DB::table('movies')->insert([
            'title' => 'Una más',
            'synopsis' => 'La novena sinopsis.',
            'year' => '2015',
            'cover' => 'Cover 9',
        ]);

        DB::table('movies')->insert([
            'title' => 'La última y nos vamos',
            'synopsis' => 'La última sinopsis.',
            'year' => '2016',
            'cover' => 'Cover 10',
        ]);

    }
}
