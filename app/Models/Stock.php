<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'stocks';

    public function libros(){
        return $this->belongsTo(Libro::class,(libro_id));
    }

    public function estantes(){
        return $this->belongsTo(Estante::class,(estante_id));
    }
}
