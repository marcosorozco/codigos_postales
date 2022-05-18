<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            ['id'=>1,'descripcion'=>'Aguascalientes', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>2,'descripcion'=>'Baja California', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>3,'descripcion'=>'Baja California Sur', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>4,'descripcion'=>'Campeche', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>5,'descripcion'=>'Chiapas', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>6,'descripcion'=>'Chihuahua', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>7,'descripcion'=>'Ciudad de México', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>8,'descripcion'=>'Coahuila de Zaragoza', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>9,'descripcion'=>'Colima', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>10,'descripcion'=>'Durango', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>11,'descripcion'=>'Guanajuato', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>12,'descripcion'=>'Guerrero', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>13,'descripcion'=>'Hidalgo', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>14,'descripcion'=>'Jalisco', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>15,'descripcion'=>'México', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>16,'descripcion'=>'Michoacán de Ocampo', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>17,'descripcion'=>'Morelos', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>18,'descripcion'=>'Nayarit', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>19,'descripcion'=>'Nuevo León', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>20,'descripcion'=>'Oaxaca', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>21,'descripcion'=>'Puebla', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>22,'descripcion'=>'Querétaro', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>23,'descripcion'=>'Quintana Roo', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>24,'descripcion'=>'San Luis Potosí', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>25,'descripcion'=>'Sinaloa', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>26,'descripcion'=>'Sonora', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>27,'descripcion'=>'Tabasco', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>28,'descripcion'=>'Tamaulipas', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>29,'descripcion'=>'Tlaxcala', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>30,'descripcion'=>'Veracruz de Ignacio de la Llave', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>31,'descripcion'=>'Yucatán', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>32,'descripcion'=>'Zacatecas', 'created_at'=>now(), 'updated_at'=>now()],

        ]);
    }
}
