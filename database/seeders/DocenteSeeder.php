<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docentes')->insert([
            'codigo' => '00'.date("Y").(string)random_int(1000, 9999),
            'nombres' => 'Jorge Luis Pozo Malpartida',
            'email' => 'jorge.pozo@unas.edu.pe',
            'telefono' => '123456789',
            'grado' => 'Magister',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docentes')->insert([
            'codigo' => '00'.date("Y").(string)random_int(1000, 9999),
            'nombres' => 'Marchand Niño Willian',
            'email' => 'willian.marchand@unas.edu.pe',
            'telefono' => '1234567289',
            'grado' => 'Ingeniero',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docentes')->insert([
            'codigo' => '00'.date("Y").(string)random_int(1000, 9999),
            'nombres' => 'Pedro Crisologo Trujillo Natividad',
            'email' => 'pedro.trujillo@unas.edu.pe',
            'telefono' => '1234567289',
            'grado' => 'Decano',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
