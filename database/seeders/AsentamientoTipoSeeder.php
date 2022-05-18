<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsentamientoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asentamientos_tipos')
            ->insert([
                ['id'=>1,'descripcion'=>'Aeropuerto', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>2,'descripcion'=>'Barrio', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>3,'descripcion'=>'Campamento', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>4,'descripcion'=>'Colonia', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>5,'descripcion'=>'Condominio', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>6,'descripcion'=>'Congregación', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>7,'descripcion'=>'Conjunto habitacional', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>8,'descripcion'=>'Ejido', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>9,'descripcion'=>'Equipamiento', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>10,'descripcion'=>'Estación', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>11,'descripcion'=>'Exhacienda', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>12,'descripcion'=>'Finca', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>13,'descripcion'=>'Fraccionamiento', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>14,'descripcion'=>'Granja', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>15,'descripcion'=>'Hacienda', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>16,'descripcion'=>'Paraje', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>17,'descripcion'=>'Parque industrial', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>18,'descripcion'=>'Poblado comunal', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>19,'descripcion'=>'Pueblo', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>20,'descripcion'=>'Puerto', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>21,'descripcion'=>'Ranchería', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>22,'descripcion'=>'Rancho', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>23,'descripcion'=>'Residencial', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>24,'descripcion'=>'Unidad habitacional', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>25,'descripcion'=>'Villa', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>26,'descripcion'=>'Zona comercial', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>27,'descripcion'=>'Zona federal', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>28,'descripcion'=>'Zona industrial', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>29,'descripcion'=>'Zona militar', 'created_at'=>now(), 'updated_at'=>now()],
                ['id'=>30,'descripcion'=>'Zona naval', 'created_at'=>now(), 'updated_at'=>now()],
            ]);
    }
}
