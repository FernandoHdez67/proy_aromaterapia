<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class categoriacontroller extends Controller
{
    public function getCategoria(){
        return response()->json(Categoria::all(),200);
    }

    //Obtener las categorias por Id
    public function getCategoriaxid($id){
        $categoria = Categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }
        return response()->json($categoria::find($id),200);
    }

    //Insertar categoria
    public function insertCategoria(Request $request){
        $categoria = Categoria::create($request->all());
        return response($categoria,200);
    }

    public function updateCategoria(Request $request, $id){
        $categoria = Categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }
        $categoria->update($request->all());
        return response($categoria,200);
    }

    public function deleteCategoria($id){
        $categoria = Categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }
        $categoria->delete();
        return response()->json(['Mensaje'=>'Registro eliminado'],200);
    }
}
