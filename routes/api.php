<?php

use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(LandingPageController::class)->group(function () {
    Route::post('section/update', 'sectionUpdate');
    Route::post('section/delete', 'sectionDelete');
    Route::post('section/save', 'sectionSave');
});


Route::controller(DestinationController::class)->group(function () {
    Route::post('', '');
});

Route::controller(AboutUsPageController::class)->group(function () {
    Route::get('aboutus-page','aboutusPage');
    Route::post('about/section1/update', 'sectionUpdate');
    Route::post('about/section2/update','sectionUpdate2');
});
