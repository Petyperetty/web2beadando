<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HelySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(database_path('data/hely.txt'), 'r');
        fgetcsv($file, 0, "\t");

        while(($sor=fgetcsv($file, 0, "\t")) !== false){
            DB::table('hely')->insert([
                'fkod'=>$sor[0],
                'moziazon'=>$sor[1]
            ]);
        }

        fclose($file);
    }
}
