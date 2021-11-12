<?php

namespace App\Http\Controllers\Prodotto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prodotto;

class ProdottoController extends Controller
{
    public function list(Request $request) {
        try {
            $ordinato_da = $request->query('order_by');
            $prodotti = Prodotto::orderBy($ordinato_da, 'desc')->paginate(4);
            return response($prodotti, 200);
        } catch (\Exception $e) {
            return response(['result' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }
}
