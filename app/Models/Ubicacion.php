<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'ubicaciones';

    public function stocks(){
        return $this->hasMany(Stock::class);
   }
}
