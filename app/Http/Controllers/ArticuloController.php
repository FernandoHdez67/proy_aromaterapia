<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Muestra todos los productos en formato JSON
    public function index()
    {
        $articulos = Articulo::all();
        return $articulos;
    }

    //Muestra los productos por id
    public function getCategoriaxid($id){
        $articulos = Articulo::find($id);
        if(is_null($articulos)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);
        }
        return response()->json($articulos::find($id),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Insertar un nuevo producto
    public function store(Request $request)
    {
        $articulo = new Articulo();
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;

        $articulo->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Actualizar un producto
    public function update(Request $request)
    {
        $articulo = Articulo::findOrFail($request->id);
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;

        $articulo->save();

        return $articulo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Eliminar un producto
    public function destroy(Request $request)
    {
        $articulo = Articulo::destroy($request->id);
        return $articulo;
    }
}
