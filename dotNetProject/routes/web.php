<?php

use App\Http\Controllers\Admin\DashboardContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthentificationM;

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



Route::get('/home', function () {
    return view('home');
})->name ('home'); //waar de user geredirect word
//We will make all the routes relying all the pages together here + navbar
//still only a get request we need a post request
Route::get('/login', [AuthentificationM::class,'login'])->name('login');
//pots request to the login
//now we have to make this one in the authentification
Route::post('/login', [AuthentificationM::class,'loginPost'])->name('login.post');
Route::get('/registration', [AuthentificationM::class,'registration'])->name('registration');
Route::post('/registration', [AuthentificationM::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthentificationM::class,'logout'])->name('logout');
Route::group(['/middleware' => 'auth'], function (){
    Route::post('/profile', function (){
        return "Hi";
    });
});

                                                                                    //only vaialble if logged in as admin
// Route::get('/admin', [DashboardContoller::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'admin']);

// Route::group(['middleware' => ['auth', 'admin']], function () {
//     // Route::get('/admin/users', [DashboardContoller::class, 'index'])->name('admin.users');
//     Route::get('/admin', [DashboardContoller::class, 'index'])->name('admin.dashboard');
//  });

//  Route::group(['middleware' => ['auth', 'admin']], function () {
//     Route::get('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');
// });

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', [DashboardContoller::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');
});
Route::patch('/admin/users/{user}/updateRole', [\App\Http\Controllers\Admin\UserController::class, 'updateRole'])->name('admin.updateRole');


 Route::get('/about', function () {
    return view('about');
})->name ('about');


Route::get('/profile', function () {
    return view('profile');
})->name ('profile');

