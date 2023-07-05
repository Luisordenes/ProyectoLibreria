<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarUbicaciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicaciones')->insert(array(
            [
                'nombre' => 'Estantes'
            ],
            [
                'nombre' => 'Bodega'
            ]
        ));
    }
}
