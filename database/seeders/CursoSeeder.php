<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'codigo' => '00000',
            'nombre' => 'No Tiene Curso',
            'credito' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'codigo' => '002017',
            'nombre' => 'Construccion de software 2',
            'credito' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'codigo' => '002018',
            'nombre' => 'Diseño de investigación 1',
            'credito' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'codigo' => '002011',
            'nombre' => 'Redes 2',
            'credito' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'codigo' => '002017',
            'nombre' => 'Fundamentos de investoigacion',
            'credito' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'codigo' => '002017',
            'nombre' => 'Metodologias agiles',
            'credito' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'codigo' => '002012',
            'nombre' => 'Diseño de investigacion 2',
            'credito' => '4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'codigo' => '002013',
            'nombre' => 'proyectos de investigacion',
            'credito' => '6',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'codigo' => '002014',
            'nombre' => 'TI',
            'credito' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'codigo' => '002015',
            'nombre' => 'Pensamiento sistemico',
            'credito' => '5',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('cursos')->insert([
            'codigo' => '002016',
            'nombre' => 'Internet de las cosas',
            'credito' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
