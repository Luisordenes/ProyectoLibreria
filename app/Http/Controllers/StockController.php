<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ubicacion;
use App\Models\Stock;
use App\Models\Libro;
use App\Models\Categoria;

class StockController extends Controller
{
    public function agregarStock(){
        $libros = Libro::get();
        $ubicaciones = Ubicacion::get();

        return view('Stock.agregar-stock',[            
            'libros' => $libros,
            'ubicaciones' => $ubicaciones
        ]);
    }

    public function grabarStock(Request $request){
        $this->validate($request,[
            'libro' => 'required',
            'ubicacion' => 'required',
            'cantidad' => 'required'
        ]);

        $stock = new Stock();
        $stock->libro_id = $request->libro;
        $stock->ubicacion_id = $request->ubicacion;
        $stock->cantidad = $request->cantidad;

        $stock->save();

        $ubicaciones = Ubicacion::get();
        $stocks = Stock::get();
        $libros = Libro::get();
        $categorias = Categoria::get();
        
        return view('Stock.listar-stock',[
            'stocks' => $stocks,
            'ubicaciones' => $ubicaciones,
            'libros' => $libros,
            'categorias' => $categorias
        ]);
    }

    public function listarStock($id){
        $ubicaciones = Ubicacion::get();
        $stocks = Stock::where('ubicacion_id', $id)->get();
        $libros = Libro::get();
        $categorias = Categoria::get();
        
        return view('Stock.listar-stock',[
            'stocks' => $stocks,
            'ubicaciones' => $ubicaciones,
            'libros' => $libros,
            'categorias' => $categorias
        ]);
    }

    public function editarStock(){
        $ubicaciones = Ubicacion::get();
        $stocks = Stock::get();
        $libros = Libro::get();
        $categorias = Categoria::get();
        
        return view('Stock.editar-stock',[
            'stocks' => $stocks,
            'ubicaciones' => $ubicaciones,
            'libros' => $libros,
            'categorias' => $categorias
        ]);
    }

    public function editandoStock($id){
        $libros = Libro::get();
        $ubicaciones = Ubicacion::get();
        $stock = Stock::where('id', $id)->get();

        return view('/Stock/editando-stock',[
            'stock' => $stock,
            'ubicaciones' => $ubicaciones,
            'libros' => $libros
        ]);
    }

    public function regrabarStock(Request $request, $id){
        $this->validate($request,[
            'cantidad' => 'required'
        ]);

        $stock = Stock::findOrFail($id);

        $stock->cantidad = $request->cantidad;
        $stock->save();

        $ubicaciones = Ubicacion::get();
        $stocks = Stock::get();
        $libros = Libro::get();
        $categorias = Categoria::get();
        
        return view('Stock.listar-stock',[
            'stocks' => $stocks,
            'ubicaciones' => $ubicaciones,
            'libros' => $libros,
            'categorias' => $categorias
        ]);
    }

    public function mensajeStock($id){
        $stock = Stock::where('id', $id)->get();

        return view('/Stock/mensaje-stock',[
            'stock' => $stock,
        ]);
    }

    public function eliminarStock($id){
        $stock = Stock::findOrFail($id);
        $stock->delete();

        $ubicaciones = Ubicacion::get();
        $stocks = Stock::get();
        $libros = Libro::get();
        $categorias = Categoria::get();
        
        return view('Stock.listar-stock',[
            'stocks' => $stocks,
            'ubicaciones' => $ubicaciones,
            'libros' => $libros,
            'categorias' => $categorias
        ]);
    }

}
