<?php

namespace App\Http\Controllers\Modello;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modello;

class ModelloController extends Controller
{
    public function get() {
        try {
            $modello = Modello::first();
            return response($modello, 200);
        } catch (\Exception $e) {
            return response(['result' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }
}
