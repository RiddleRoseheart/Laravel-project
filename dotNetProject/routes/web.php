<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthentificationM;
use App\Http\Controllers\Admin\DashboardContoller;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\QuestionController;



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
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');


    Route::prefix('admin/AdminFaq')->group(function () {
        Route::get('/', [QuestionController::class, 'index'])->name('admin.adminFaq');
        Route::get('/create', [QuestionController::class, 'create'])->name('admin.createQuestion');
        Route::post('/', [QuestionController::class, 'store'])->name('admin.storeQuestion');
        Route::get('/{id}', [QuestionController::class, 'show'])->name('admin.showQuestion');
        Route::get('/{id}/edit', [QuestionController::class, 'edit'])->name('admin.editQuestion');
        Route::put('/{id}', [QuestionController::class, 'update'])->name('admin.updateQuestion');
        Route::delete('/{id}', [QuestionController::class, 'destroy'])->name('admin.deleteQuestion');
     });
     Route::prefix('admin/Categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.categories');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.createCategory');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.storeCategory');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('admin.showCategory');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('admin.editCategory');
        Route::put('/{id}', [CategoryController::class, 'update'])->name('admin.updateCategory');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('admin.deleteCategory');
        
    });
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


Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/updateProfile', [ProfileController::class, 'edit'])->name('updateProfile');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

// Route::get('/product/{id}/review', [ProductController::class, 'showReview'])->name('product.review');
Route::get('/admin/product/{product}/review', [ProductController::class, 'showReview'])->name('admin.product.review');

Route::get('/faq', [CategoryController::class, 'faq'])->name('faq');
