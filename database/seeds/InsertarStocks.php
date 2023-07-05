<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarStocks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert(array(
            [
                'cantidad' => 10,
                'libro_id' => 1,
                'ubicacion_id' => 1
            ],
            [
                'cantidad' => 8,
                'libro_id' => 2,
                'ubicacion_id' => 2
            ],
            [
                'cantidad' => 12,
                'libro_id' => 3,
                'ubicacion_id' => 1
            ],
            [
                'cantidad' => 6,
                'libro_id' => 4,
                'ubicacion_id' => 2
            ],
            [
                'cantidad' => 5,
                'libro_id' => 5,
                'ubicacion_id' => 1
            ],
            [
                'cantidad' => 7,
                'libro_id' => 6,
                'ubicacion_id' => 2
            ],
            [
                'cantidad' => 14,
                'libro_id' => 7,
                'ubicacion_id' => 1
            ],
            [
                'cantidad' => 6,
                'libro_id' => 8,
                'ubicacion_id' => 2
            ],
            [
                'cantidad' => 4,
                'libro_id' => 9,
                'ubicacion_id' => 1
            ],
            [
                'cantidad' => 5,
                'libro_id' => 10,
                'ubicacion_id' => 2
            ]
        ));
    }
}
