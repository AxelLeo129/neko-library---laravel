<?php

namespace App\Http\Controllers\Cursore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cursore;

class CursoreController extends Controller
{
    public function list() {
        try {
            $cursore = Cursore::all();
            return response($cursore, 200);
        } catch (\Exception $e) {
            return response(['result' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }
}
