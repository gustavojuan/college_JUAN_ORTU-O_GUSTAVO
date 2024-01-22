<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([

                    [

                            'ref'=>'dwes',
                            'name'=> 'Desarrollo Aplicaciones Entorno Servidor',
                            'hours'=>60,
                            'level'=>2,
                            'course_id'=>1
                    ],
                    [

                        'ref'=>'dwec',
                        'name'=> 'Desarrollo Aplicaciones Entorno Cliente',
                        'hours'=>60,
                        'level'=>2,
                        'course_id'=>1
                    ]
              ]
        );
    }
}
