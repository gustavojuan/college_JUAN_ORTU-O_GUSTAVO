<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'ref'=> 'daw',
                'name'=> 'Desarrollo aplicaciones web',
                'hours'=> 410,
                'practices'=> true,
            ],
            [
                'ref'=> 'dam',
                'name'=> 'Desarrollo aplicaciones Multipaltaforma',
                'hours'=> 410,
                'practices'=> true,
            ],
            [
                'ref'=> 'coc',
                'name'=> 'Cocina',
                'hours'=> 370,
                'practices'=> true,
            ]]
        );
    }
}
