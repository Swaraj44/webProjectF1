<?php


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Custom;
use App\Http\Controllers\UserController;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   return view('home');
});

//Route::post("/check_a",[NController::class,'index']);

Route::get('/', [Controller::class, 'home']);
Route::get('/home', [Controller::class, 'home']);
Route::get('/home11', [Controller::class, 'home11']);
Route::get('/work2', [Controller::class, 'showCheckPageaa']);
Route::get('/work3', [Controller::class, 'showCheckPagelog']);
Route::get('/login1', [Custom::class, 'login']);
Route::get('/reg', [Custom::class, 'registration']);
Route::post('/register-user',[Custom::class,'regUser'])->name('register-user');


Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register',[UserController::class, 'register'])->name('register.post');


Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::post('/logout',[UserController::class, 'logout'])->name('logout');



Route::get('/articles/create', [ArticleController::class, 'create'])->name('create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

