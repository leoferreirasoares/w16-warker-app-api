<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadesController;
use App\Http\Controllers\PostosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::get('/cidade/{id}', [Cidades::class,'show'])->name('cidades.show');
Route::get('/posto/{id}', [Postos::class,'show'])->name('postos.show');*/
Route::apiResources([
    'posto' => CidadesController::class,
    'cidade' => PostosController::class,
    
]
);