<?php

namespace App\Http\Controllers\Cursore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cursore;
use Illuminate\Support\Facades\Validator;

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

    public function store(Request $request) {
        try {
            $validar = Validator::make($request->all(), [
                'immagine_sfondo' => 'required|max:255',
            ]);
    
            if ($validar->fails()) {
                return response(['result' => 'fail', 'message' => $validar->errors()], 500);
            }
    
            $course = new Cursore();
            $course->immagine_sfondo = $request->immagine_sfondo;
            $course->immagine_prodotto = $request->immagine_prodotto;
            $course->tipo = $request->tipo;
            $course->stile_immagine = $request->stile_immagine;
            $course->stile_testo = $request->stile_testo;
            $course->titolo1 = $request->titolo1;
            $course->titolo2 = $request->titolo2;
            $course->titolo3 = $request->titolo3;
            $course->pulsante = $request->pulsante;
            $course->url = $request->url;

            if(!$course->save()) {
                return response(['result' => 'fail', 'message' => 'Error al crear el curso, por favor inténtelo más tarde.'], 500);
            }
            
            return response([
                'result' => 'success', 
                "message"=> 'Curso creado exitósamente.'
            ]);
        } catch (\Exception $e) {
            return response(['result' => 'fail', 'message' => $e->getMessage()], 500);
        }
    }
}
