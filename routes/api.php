<?php

use App\Http\Controllers\API\ListePresenceController;
use App\Http\Controllers\API\MissionController;
use App\Http\Controllers\API\NoteController;
use App\Http\Controllers\API\RessourceController;
use App\Http\Controllers\API\SeanceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\API\UserController;

Route::apiResource("users", UserController::class);
Route::apiResource("listes", ListePresenceController::class);
// Route::get("user/{mail}", [UserController::class,"showByMail"]);
Route::get("user", [UserController::class,"showByMail"]);
Route::post("login", [UserController::class,"login"]);
Route::post("user/pcc", [UserController::class,"setPcc"]);
Route::post("user/avatar", [UserController::class,"setAvatar"]);
Route::apiResource("missions", MissionController::class);
Route::apiResource("ressources", RessourceController::class);
Route::apiResource("seances", SeanceController::class);
Route::apiResource("notes", NoteController::class);
Route::get("note/{seanceid}", [NoteController::class,"showBySeance"]);
Route::get("liste/{seanceid}", [ListePresenceController::class,"showBySeance"]);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
