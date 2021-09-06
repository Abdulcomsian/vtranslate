<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('screens.auth.login');
});
Route::get('/register', function () {
    return view('screens.auth.register');
});

Auth::routes(['verify' => true]);
Route::get('email/verify', [App\Http\Controllers\Auth\VerificationController::class,'show'])->name('verification.notice');

//route group

    Route::get('/', function () {
    return view('screens.home');
    });
    Route::get('/search-freelancer', function () {
        return view('screens.freelancer.search-freelancer');
    });
    Route::get('/top-freelancer', function () {
        return view('screens.freelancer.top-freelancer');
    });
    Route::get('/search-agencies', function () {
        return view('screens.agencies.search-agencies');
    });
    Route::get('/top-agencies', function () {
        return view('screens.agencies.top-agencies');
    });
    Route::get('/forums', function () {
        return view('screens.forums');
    });
    Route::get('/contact-us', function () {
        return view('screens.contact-us');
    });

    Route::get('/about-us', function () {
        return view('screens.about-us');
    });
    Route::get('/privacy-policy', function () {
        return view('screens.privacy-policy');
    });
    Route::get('/term-condition', function () {
        return view('screens.term-condition');
    });
    Route::get('/how-it-works', function () {
        return view('screens.how-it-works');
    });
    Route::get('/faq', function () {
        return view('screens.faq');
    });

Route::middleware(['verified','auth'])->group(function()
    {
        Route::get('/profile', function () {
            return view('screens.profile');
        });
    });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Show this page after verifying email address
Route::view('/thanks-for-registration','auth.thanks-for-registration');
//Show thanks page after successfull registeration of user
Route::view('/successfully-registered','auth.login-success')->name('login.success');
