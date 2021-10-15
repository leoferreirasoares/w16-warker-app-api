<?php

namespace App\Http\Controllers;
use App\Models\Cidades;
use Illuminate\Http\Request;

class Cidades extends Controller
{
   
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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
