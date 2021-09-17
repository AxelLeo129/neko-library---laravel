<?php

namespace App\Http\Controllers\Categoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Sottocategoria;

class CategoriaController extends Controller
{
    
    public function listCategoriesAndSubcategories() {
        try {
            $categorie = Categoria::all();
            foreach ($categorie as $key => $value) {
                $sottocategorie = Sottocategoria::where('categoria_id', $value->id)->get();
                $value["sottocategorie"] = $sottocategorie;
            }
            return response($categorie, 200);
        } catch (\Exception $e) {
            return response(['result' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }

    public function verifyRouteCategory($ruta) {
        try {
            $categoria = Categoria::where('rotta', $ruta)->first();
            return response($categoria ? $categoria : ["mensaje" => "No encontrada"], 200);
        } catch (\Exception $e) {
            return response(['result' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }

    public function verifyRouteSubcategory($ruta) {
        try {
            $subcategoria = Sottocategoria::where('rotta', $ruta)->first();
            return response($subcategoria ? $subcategoria : ["mensaje" => "No encontrada"], 200);
        } catch (\Exception $e) {
            return response(['result' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }

}
