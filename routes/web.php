<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsereditController;
use App\Http\Controllers\architecteditController;
use App\Http\Controllers\ImageController;



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
});


Route::get('/photos', [ImageController::class,'show'])->name('gallery');
Route::get('/calendar', [ImageController::class,'calendar'])->name('calendar');
Route::get('/download/{data}', [ImageController::class,'download'])->name('download');;
Route::get('/messageuser', [HomeController::class, 'messageuser'])->name('messageuser');


Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');


});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/


Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('users', UsereditController::class);
    Route::get('/architects', [architecteditController::class, 'index'])->name('architect.index');
    Route::get('/architects/create', [architecteditController::class, 'create'])->name('architect.create');
    Route::post('/architects/store', [architecteditController::class, 'store'])->name('architect.store');
    Route::post('/architects/update/{id}', [architecteditController::class, 'update'])->name('architect.update');
    Route::get('/architects/destroy/{id}', [architecteditController::class, 'destroy'])->name('architect.destroy');
    Route::get('/architects/show/{id}', [architecteditController::class, 'show'])->name('architect.show');
    Route::get('/architects/edit/{id}', [architecteditController::class, 'edit'])->name('architect.edit');
    Route::get('/image/admin', [ImageController::class,'index']);
    Route::post('/image/admin', [ImageController::class,'store']);

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:architect'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'architectHome'])->name('architect.home');

    // Route::resource('users', UsereditController::class);
});

Route::post('/postChangePassword', [HomeController::class,'changePasswordSave'])->name('postChangePassword');


Route::get('/password', [HomeController::class,'password'])->name('password');

Route::get('/view_calendar', [HomeController::class,'view_calendar'])->name('view_calendar');

Route::get('/index_image', [ImageController::class,'index'])->name('index_image');
Route::post('/add_image', [ImageController::class,'store'])->name('add_image');

Route::get('/messagepage', [HomeController::class, 'messagepage']);

Route::post('/sendmessageuser', [HomeController::class, 'sendmessageus'])->name('sendmessageus');

Route::get('/messageadmin', [HomeController::class, 'messageadmin']);
Route::get('/view_user_all', [HomeController::class, 'view_user_all'])->name('view_user_all');
Route::post('/admin_reply/{id}', [HomeController::class, 'admin_reply'])->name('admin_reply');


Route::post('/admin_send_message/{id}', [HomeController::class, 'admin_send_message'])->name('admin_send_message');
Route::post('/user_reply/{id}', [HomeController::class, 'user_reply'])->name('user_reply');

Route::get('/view_my_message', [HomeController::class, 'view_my_message'])->name('view_my_message');


Route::get('/message_to_architect', [HomeController::class, 'message_to_architect']);

Route::post('/sendmessagearhitect', [HomeController::class, 'sendmessagearhitect'])->name('sendmessagearhitect');

Route::get('/message_arhitect', [HomeController::class, 'Message_arhitect']);

Route::get('/architect_view_user_all', [HomeController::class, 'architect_view_user_all'])->name('architect_view_user_all');
Route::get('/architect_view_my_message', [HomeController::class, 'architect_view_my_message'])->name('architect_view_my_message');

Route::post('/architect_send_message/{id}', [HomeController::class, 'architect_send_message'])->name('architect_send_message');

