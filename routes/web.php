<?php

use App\Http\Controllers\DesignationContoller;
use App\Http\Controllers\Landing\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Test\TestController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| Created On : 15-05-2024
| Created By : 
*/

// Route::get('/', function () {
//     return view('welcome');
// });


/**
 * | Route for testing 
 * | Used to test the view route 
 */
Route::controller(TestController::class)->group(function () {
    Route::get('test1', 'testVersion');
});

/**
 * | Route for the dashboard 
 * | Use for the Dashboard sections
 */
Route::controller(DashboardController::class)->group(function () {
    Route::get('', 'index');
    Route::get('about-us', 'aboutUs');
    Route::get('our-destination', 'ourDestination');
    Route::get('littile-inspiration', 'littileInspiration');
    Route::get('our-servic', 'ourServic');
    Route::get('responsible-travel', 'responsibleTravel');
    Route::get('blogs', 'blogs');
    Route::get('contact-us', 'contactUs');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::controller(LandingPageController::class)->group(function () {
        Route::get('landing-page', 'landingPage');
        Route::post('section1/update', 'sectionUpdate')->name('section1.update');
        Route::post('section2/update', 'sectionUpdate2')->name('section2.update');
        Route::post('section/delete', 'sectionDelete');
        Route::post('section/save', 'sectionSave');
    });

    // Designation
    Route::controller(DesignationContoller::class)->group(function () {
        Route::get('admin/designation', 'viewAdminDesignation')->name('admin.designation');
        Route::post('admin/designation/update-section', 'updateSections')->name('admin.designation.updatesection');
    });
});
