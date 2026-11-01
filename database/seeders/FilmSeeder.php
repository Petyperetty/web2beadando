<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(database_path('data/film.txt'), 'r');
        fgetcsv($file, 0, "\t");

        while(($sor=fgetcsv($file, 0, "\t")) !== false){
            DB::table('film')->insert([
                'fkod'=>$sor[0],
                'filmcim'=>$sor[1],
                'szines'=>$sor[2] === 1 ? true : false,
                'szinkron'=>$sor[3] === '' ? null : $sor[3],
                'szarmazas'=>$sor[4],
                'mufaj'=>$sor[5],
                'hossz'=>$sor[6]
            ]);
        }

        fclose($file);
    }
}
