<?php

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



Route::get('/', function () {
    return view('welcome');
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








 //       function(){
 //   return view('login');
//});

// Route::get('/registration', function(){
//     return view('registration');
// });





