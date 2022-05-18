<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', '-1');
        DB::table('zonas')->insert([
            ['id'=>1,'descripcion'=>'Rural', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>2,'descripcion'=>'Semiurbano', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>3,'descripcion'=>'Urbano', 'created_at'=>now(), 'updated_at'=>now()],

        ]);
    }
}
