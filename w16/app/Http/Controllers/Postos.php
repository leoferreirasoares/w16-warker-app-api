<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postos extends Controller
{
    public function show($id)
    {
        try {
            $response = Postos::findOrFail($id);

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
