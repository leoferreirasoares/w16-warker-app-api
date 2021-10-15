<?php

namespace App\Http\Controllers;
use App\Models\Cidades;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    public function index()
    {
        $response = Cidades::all();
        return response()->json($response);
    }
   
    public function show($id)
    {
        try {
            $response = Cidades::findOrFail($id);

            if (!$response) {
                return response()->json([
                    'message' => 'Registro não encontrado.',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $response
            ]);
        } catch (ModelNotFoundException $e) {
            response()->json($e);
        }
    }

}
