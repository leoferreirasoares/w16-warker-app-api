<?php

namespace App\Http\Controllers;
use App\Models\Postos;
use Illuminate\Http\Request;

class PostosController extends Controller
{
    public function index()
    {
        $response = Postos::all();
        return response()->json($response);
    }
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
