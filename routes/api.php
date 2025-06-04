<?php

use App\Http\Controllers\CountyController;
use App\Http\Controllers\ExerciseYearController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SigtapController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::group(['middleware' => 'api'], function ($router) {

    Route::get('welcome', function() {
        return response()->json('Welcome to SISPPI API', 200);
    })->middleware(Auth::class);

});

Route::group(['middleware' => 'api', 'prefix' => 'user'], function ($router) {

    Route::get('get/users', [UserController::class, 'getUsers'])->middleware(Auth::class);
    Route::get('get/user/{id}', [UserController::class, 'getUser'])->middleware(Auth::class);

});

Route::group(['middleware' => 'api', 'prefix' => 'county'], function ($router) {

    Route::get('get/counties', [CountyController::class, 'getCounties'])->middleware(Auth::class);

});

Route::group(['middleware' => 'api', 'prefix' => 'sigtap'], function ($router) {

    Route::get('get/competences', [SigtapController::class, 'getCompetences'])->middleware(Auth::class);
    Route::get('get/procedures/{competence}/{chunk}', [SigtapController::class, 'getProcedures'])->middleware(Auth::class);

});

Route::group(['middleware' => 'api', 'prefix' => 'exercise/year'], function ($router) {

    Route::get('get/exercise/years', [ExerciseYearController::class, 'getExerciseYears'])->middleware(Auth::class);
    Route::post('create/exercise/year', [ExerciseYearController::class, 'createExerciseYear'])->middleware(Auth::class);

});
