<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller as BaseController;


use App\Http\Controllers\Custom;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ApplicationController;


use App\Models\Article;
use App\Models\User_Info;
use App\Models\Result;
use App\Models\Notice;
use App\Models\Contact;
use App\Models\Application;


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
Route::get('/login', [Custom::class, 'login']);
Route::get('/profile', [UserController::class, 'showUserInfo'])->name('profile');
Route::get('/profilest', [UserController::class, 'showUserInfost'])->name('profilest');
Route::get('/profilete', [UserController::class, 'showUserInfote'])->name('profilete');
Route::get('/dash_te', [UserController::class, 'dash_te']);



Route::get('/reg', [Custom::class, 'registration']);
Route::post('/register-user',[Custom::class,'regUser'])->name('register-user');


Route::get('/contactus', [Custom::class, 'contactus']);
Route::get('/about', [Custom::class, 'about']);
Route::get('/base', [Custom::class, 'base']);


Route::get('/admission', [Custom::class, 'admission']);



Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register',[UserController::class, 'register'])->name('register.post');


Route::get('/login1', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login1', [UserController::class, 'login'])->name('login.post');
Route::post('/logout',[UserController::class, 'logout']);





Route::get('/articles/create', [ArticleController::class, 'create'])->name('create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles1', [ArticleController::class, 'article_show'])->name('article_show');





Route::get('/update', [UserController::class, 'showupdate']);
Route::get('/user_info/{id}/edit', [UserController::class, 'edit'])->name('user_info.edit');
Route::post('/user_info/{id}/update', [UserController::class, 'update'])->name('update');
Route::put('/user_info/{id}/', [UserController::class, 'update'])->name('user_info.update');




Route::get('/dash_ug', [Custom::class, 'dash_ug']);
Route::get('/dash_g', [Custom::class, 'dash_g']);
Route::get('/dash_pg', [Custom::class, 'dash_pg']);





Route::get('/dash_te', [UserController::class, 'dash_te']);
Route::get('/dash_st', [UserController::class, 'dash_st']);
Route::get('/info_te', [UserController::class, 'info_te']);




Route::get('/results', [ResultController::class, 'index']);
Route::post('/results', [ResultController::class, 'store'])->name('storeResult');
Route::get('/results_show', [ResultController::class, 'show'])->name('showResults');



//Route::post('/src', [ResultController::class, 'src']);
//Route::post('/search', [ResultController::class, 'search'])->name('search');


Route::get('/search', function () {
   return view('testing');
});

Route::post('/search', [ResultController::class, 'search'])->name('search');






Route::get('/notices', [NoticeController::class, 'index'])->name('notices.index');
Route::get('/notices/create', [NoticeController::class, 'create'])->name('notices.create');
Route::post('/notices', [NoticeController::class, 'store'])->name('notices.store');



Route::get('/testing', [Custom::class, 'testing']);




                                                                    // Route for the contact form
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
                                                                   // Route to display the saved data
Route::get('/contact/show', [ContactController::class, 'show'])->name('contact.show');




                                                                      // Save data page
Route::get('/applications/create', [ApplicationController::class, 'create'])->name('applications.create');
Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');
                                                                      // Show data page
Route::get('/applications/{id}', [ApplicationController::class, 'show'])->name('applications.show');

