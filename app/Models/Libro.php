<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'libros';

    public function categorias(){
        return $this->belongsTo(Categoria::class, (categoria_id));
    }

    public function stock(){
        return $this->hasMany(Stock::class);
   }
}
