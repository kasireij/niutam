<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SliderController;

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

Route::get('/', [HomeController::class, 'Index'])->name('home');

//Pages Routes
Route::get('/apps', [PageController::class, 'AppsPage'])->name('apps');

Route::get('/directory', [PageController::class, 'DirectoryPage'])->name('directories');

Route::get('/sliders', [HomeController::class, 'HomeSlider'])->name('sliders');

//Documents Routes
Route::get('/form', [DocumentsController::class, 'FormsPage'])->name('forms');

Route::get('/policy', [DocumentsController::class, 'PoliciesPage'])->name('policies');

Route::get('/circular', [DocumentsController::class, 'CircularsPage'])->name('circulars');

//Admin Group Routes
Route::group(['middleware' => 'auth'], function(){

    //Admin Directories Routes
    Route::get('/admin/directories', [DirectoriesController::class, 'Index'])->name('admin.directories');
    Route::get('/add/directory', [DirectoriesController::class, 'AddDirectory'])->name('add.directory');
    Route::post('/store/directory', [DirectoriesController::class, 'StoreDirectory'])->name('store.directory');
    Route::get('/directory/edit/{id}', [DirectoriesController::class, 'Edit']);
    Route::post('/directory/update/{id}', [DirectoriesController::class, 'Update']);
    Route::get('/directory/delete/{id}', [DirectoriesController::class, 'Delete']);

    //Admin Sliders Routes    
    Route::get('/admin/slider', [SliderController::class, 'index'])->name('admin.slider');
    Route::get('/add/slider', [SliderController::class, 'create'])->name('add.slider');
    Route::post('/store/slider', [SliderController::class, 'StoreSlider'])->name('store.slider');
    Route::get('/slider/edit/{id}', [SliderController::class, 'Edit']);
    Route::post('/slider/update/{id}', [SliderController::class, 'Update']);
    Route::get('/slider/delete/{id}', [SliderController::class, 'Delete']);

});


Route::get('/send-email', [MailController::class, 'sendEmail']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [HomeController::class, 'Logout'])->name('user.logout');
