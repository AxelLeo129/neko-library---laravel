<?php

namespace App\Http\Controllers\Categoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Subcategoria;

class CategoriaController extends Controller
{
    
    public function listCategoriesAndSubcategories() {
        try {
            $categorias = Categoria::all();
            foreach ($categorias as $key => $value) {
                $subcategorias = Subcategoria::where('categoria_id', $value->id)->get();
                $value["subcategorias"] = $subcategorias;
            }
            return response($categorias, 200);
        } catch (\Exception $e) {
            return response(['result' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }

    public function verifyRouteCategory($ruta) {
        try {
            $categoria = Categoria::where('ruta', $ruta)->first();
            return response($categoria ? $categoria : "No encontrada", 200);
        } catch (\Exception $e) {
            return response(['result' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }

    public function verifyRouteSubcategory($ruta) {
        try {
            $subcategoria = Subcategoria::where('ruta', $ruta)->first();
            return response($subcategoria ? $subcategoria : "No encontrada", 200);
        } catch (\Exception $e) {
            return response(['result' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }

}
