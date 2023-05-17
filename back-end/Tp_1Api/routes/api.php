<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/stagiaires", [StagiaireController::class, "index"]);
Route::get("/stagiaires/{id}", [StagiaireController::class, "show"]);
Route::delete("/stagiaires/{id}", [StagiaireController::class, "destroy"]);
Route::post("/stagiaires/add", [StagiaireController::class, "store"]);
Route::put("/stagiaires/up/{id}", [StagiaireController::class, "update"]);
