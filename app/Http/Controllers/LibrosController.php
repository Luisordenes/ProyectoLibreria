<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Categoria;
use App\Models\Ubicacion;
use App\Models\Libro;
use App\Models\Stock;

class LibrosController extends Controller
{
    public function agregarLibro(){
        $categorias = Categoria::get();
        return view('Libro.agregar-libro',[
            'categorias' => $categorias
        ]);
    }

    public function grabarLibro(Request $request){
        $this->validate($request,[
            'nombre' => 'required',
            'codigo' => 'required',
            'autor' => 'required',
            'precio' => 'required',
            'image' => 'required',
            'categoria' => 'required'
        ]);

        $imagen = $request->file('image');
        
        if($imagen){
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
        }

        $libro = new Libro();
        $libro->nombre = $request->nombre;
        $libro->codigo = $request->codigo;
        $libro->autor = $request->autor;
        $libro->precio = $request->precio;
        $libro->image = $imagen_path;
        $libro->categoria_id = $request->categoria;
        $libro->save();

        $libros = Libro::orderBy('nombre','ASC')->get();
        $categorias = Categoria::get();
        
        return view('Libro.listar-libros',[
            'libros' => $libros,
            'categorias' => $categorias
        ]);
    }

    public function getImagen($filename){
        $file = \Storage::disk('imagenes')->get($filename);
        return new Response($file, 200);
    }

    public function listarLibros(){
        $libros = Libro::orderBy('nombre','ASC')->get();
        $categorias = Categoria::get();
        
        return view('Libro.listar-libros',[
            'libros' => $libros,
            'categorias' => $categorias
        ]);
    }

    public function listarUltimosLibros(){
        $libros = Libro::latest()
        ->take(12)
        ->get();
        $categorias = Categoria::get();
        
        return view('Libro.listar-ultimos',[
            'libros' => $libros,
            'categorias' => $categorias
        ]);
    }

    public function consultarLibro($dato){
        $libros = Libro::where('nombre', 'LIKE', '%'.$dato.'%')->orWhere('codigo', 'LIKE', '%'.$dato.'%')->get();
        
        return view('/Libro.listar-libros',[
            'libros' => $libros
        ]);
    }

    public function editarLibro($id){
        $libro = Libro::where('id', $id)->get();
        $categorias = Categoria::get();

        return view('/libro/editar-libro',[
            'libro' => $libro,
            'categorias' => $categorias
        ]);
    }

    public function regrabarLibro(Request $request, $id){
        $this->validate($request,[
            'nombre' => 'required',
            'codigo' => 'required',
            'autor' => 'required',
            'precio' => 'required',
            'categoria' => 'required'
        ]);

        $imagen = $request->file('image');
        
        if($imagen){
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('imagenes')->put($imagen_path, \File::get($imagen));
            $libro = Libro::findOrFail($id);
            $libro->nombre = $request->nombre;
            $libro->codigo = $request->codigo;
            $libro->autor = $request->autor;
            $libro->precio = $request->precio;
            $libro->image = $imagen_path;
            $libro->categoria_id = $request->categoria;
            $libro->save();
        }else{
            $libro = Libro::findOrFail($id);
            $libro->nombre = $request->nombre;
            $libro->codigo = $request->codigo;
            $libro->autor = $request->autor;
            $libro->precio = $request->precio;
            $libro->categoria_id = $request->categoria;
            $libro->save();
        }

        $libros = Libro::orderBy('nombre','ASC')->get();
        $categorias = Categoria::get();
        
        return view('Libro.listar-libros',[
            'libros' => $libros,
            'categorias' => $categorias
        ]);
    }

    public function mensajeLibro($id){
        $libro = Libro::where('id', $id)->get();

        return view('/Libro/mensaje-libro',[
            'libro' => $libro,
        ]);
    }

    public function eliminarLibro($id){
        $stocks = Stock::get();
        foreach($stocks as $stock){
            if($stock->libro_id == $id){
                $stock = Stock::findOrFail($stock->id);
                $stock->delete();
            }
        }

        $libro = Libro::findOrFail($id);
        $libro->delete();

        $libros = Libro::get();
        $categorias = Categoria::get();
        
        return view('Libro.listar-libros',[
            'libros' => $libros,
            'categorias' => $categorias
        ]);
    }

    public function stockLibro($id){
        $ubicaciones = Ubicacion::get();
        $stocks = Stock::get();
        $libro = Libro::where('id', $id)->get();
        $categorias = Categoria::get();

        return view('Libro.stock-libro',[
            'stocks' => $stocks,
            'ubicaciones' => $ubicaciones,
            'libro' => $libro,
            'categorias' => $categorias
        ]);
    }
}
