<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Ubicacion;
use App\Models\Libro;
use App\Models\Stock;

class CategoriasController extends Controller
{
    public function agregarCategoria(){
        return view('/Categoria/agregar-categoria');
    }

    public function grabarCategoria(Request $request){
        $this->validate($request,[
            'nombre' => 'required' 
        ]);

        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();

        $categorias = Categoria::get();

        return view('Categoria.listar-categoria',[
            'categorias' => $categorias
        ]);
    }

    public function listarCategoria(){
        $categorias = Categoria::get();

        return view('Categoria.listar-categoria',[
            'categorias' => $categorias
        ]);
    }

    public function editarCategoria($id){

        $categoria = Categoria::where('id', $id)->get();

        return view('/Categoria/editar-categoria',[
            'categoria' => $categoria
        ]);
    }

    public function regrabarCategoria(Request $request, $id){
        $this->validate($request,[
            'nombre' => 'required' 
        ]);
        
        $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $request->nombre;
        $categoria->save();

        $categorias = Categoria::get();

        return view('Categoria.listar-categoria',[
            'categorias' => $categorias
        ]);
    }

    public function mensajeCategoria($id){
        $categoria = Categoria::where('id', $id)->get();

        return view('/Categoria/mensaje-categoria',[
            'categoria' => $categoria,
        ]);
    }

    public function eliminarCategoria($id){
        $libros = Libro::get();
        $stocks = Stock::get();
        foreach($libros as $libro){
            if($libro->categoria_id == $id){
                foreach($stocks as $stock){
                    if($libro->id == $stock->libro_id){
                        $stock = Stock::findOrFail($stock->id);
                        $stock->delete();
                    }
                }
                $libro = Libro::findOrFail($libro->id);
                $libro->delete();
            }
        }
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        $categorias = Categoria::get();

        return view('Categoria.listar-categoria',[
            'categorias' => $categorias
        ]);
    }

    public function stockCategoria($id){
        $ubicaciones = Ubicacion::get();
        $stocks = Stock::get();
        $libros = Libro::where('categoria_id', $id)->get();
        $categoria = Categoria::where('id', $id)->get();
        
        return view('Categoria.stock-categoria',[
            'stocks' => $stocks,
            'ubicaciones' => $ubicaciones,
            'libros' => $libros,
            'categoria' => $categoria
        ]);
    }
}
