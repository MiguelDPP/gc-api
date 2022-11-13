<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class type_question_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_questions')->insert([
            [
                'name' => 'Seleccion Multiple',
            ],
            [
                'name' => 'Unica Respuesta',
            ],
            [
                'name' => 'Verdadero o Falso',
            ],
            [
                'name' => 'Selecccionar en el mapa',
            ]
        ]);
    }
}
