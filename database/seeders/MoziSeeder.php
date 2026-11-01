<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoziSeeder extends Seeder
{
    /*
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(database_path('data/mozi.txt'), 'r');
        fgetcsv($file, 0, "\t");

        while(($sor=fgetcsv($file, 0, "\t")) !== false){
            DB::table('mozi')->insert([
                'moziazon'=>$sor[0],
                'mozinev'=>$sor[1],
                'irszam'=>$sor[2],
                'cim'=>$sor[3],
                'telefon'=>$sor[4] === '' ? null:$sor[4],
            ]);
        }

        fclose($file);
    }
}
