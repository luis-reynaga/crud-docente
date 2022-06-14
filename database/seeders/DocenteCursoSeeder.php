<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DocenteCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docente_cursos')->insert([
            'cantidad_alumnos' => "30",
            'docente_id' => 1,
            'curso_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docente_cursos')->insert([
            'cantidad_alumnos' => "20",
            'docente_id' => 1,
            'curso_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docente_cursos')->insert([
            'cantidad_alumnos' => "10",
            'docente_id' => 1,
            'curso_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docente_cursos')->insert([
            'cantidad_alumnos' => "15",
            'docente_id' => 1,
            'curso_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docente_cursos')->insert([
            'cantidad_alumnos' => "19",
            'docente_id' => 2,
            'curso_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docente_cursos')->insert([
            'cantidad_alumnos' => "11",
            'docente_id' => 2,
            'curso_id' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docente_cursos')->insert([
            'cantidad_alumnos' => "5",
            'docente_id' => 3,
            'curso_id' => 7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docente_cursos')->insert([
            'cantidad_alumnos' => "40",
            'docente_id' => 3,
            'curso_id' => 8,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docente_cursos')->insert([
            'cantidad_alumnos' => "25",
            'docente_id' => 3,
            'curso_id' => 9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('docente_cursos')->insert([
            'cantidad_alumnos' => "36",
            'docente_id' => 1,
            'curso_id' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
