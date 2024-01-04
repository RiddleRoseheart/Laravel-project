<?php

use App\Http\Controllers\Admin\DashboardContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthentificationM;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;

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



Route::get('/home', [HomeController::class, 'index'])->name('home');
 //waar de user geredirect word
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
    Route::resource('admin/products', ProductController::class);

});
// Route::get('admin/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::get('admin/products', [ProductController::class, 'index'])->name('products.index');
// Route::post('admin/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::patch('admin/products/{product}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::patch('/admin/users/{user}/updateRole', [\App\Http\Controllers\Admin\UserController::class, 'updateRole'])->name('admin.updateRole');
Route::delete('/admin/users/{user}/delete', [\App\Http\Controllers\Admin\UserController::class, 'deleteUser'])->name('admin.deleteUser');



 Route::get('/about', function () {
    return view('about');
})->name ('about');


Route::get('/profile', function () {
    return view('profile');
})->name ('profile');

