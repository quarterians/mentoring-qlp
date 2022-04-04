<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [PageController::class, 'maintenance'])->name('maintenance');

Route::prefix('dev')->group(function () {

    Auth::routes();

    Route::get('/', [PageController::class, 'index'])->name('home');

    Route::get('/guide', [PageController::class, 'guide'])->name('guide');

    Route::group(['middleware' => 'auth', 'prefix' => 'settings'], function () {
        Route::get('/profile', [PageController::class, 'settingProfile'])->name('setting.profile');
        Route::get('/account', [PageController::class, 'settingAccount'])->name('setting.account');
        Route::put('/profile/{id}/edit', [UserController::class, 'updateProfile'])->name('user.updateProfile');
        Route::put('/account/{id}/edit', [UserController::class, 'updateAccount'])->name('user.updateAccount');
        Route::delete('/account/{id}/delete', [UserController::class, 'deleteAccount'])->name('user.deleteAccount');
    });

    Route::group(['prefix' => 'mentors'], function () {
        Route::get('/', [PageController::class, 'mentors'])->name('mentors');
        Route::get('/detail/{id}', [PageController::class, 'mentorDetail'])->name('mentorDetail');
    });
});

Route::get('/login', function () {
    return view('qlp.login');
});
Route::get('/register', function () {
    return view('qlp.register');
});

Route::get('/formtestimonial', [TestimonialController::class, 'createtestimonial']);
Route::post('/formtestimonial', [TestimonialController::class,'storetestimonial']);

Route::get('/searchmentor', [PageController::class, 'searchmentor'])->name('searchmentor');
Route::get('/e_formreview', [PageController::class, 'e_formreview'])->name('e_formreview');


