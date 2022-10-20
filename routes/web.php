<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SiswaController;


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


Route::get('/add-post',[PostController::class,'addPost']);
Route::post('/create-post',[PostController::class,'createPost'])->name('post.create');
Route::get('/post',[PostController::class,'getPost']);

Route::get('/delete/{id}',[PostController::class,'delete'])->name('delete');

Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');
Route::post('/update-post/{id}',[PostController::class,'updatePost'])->name('post.update');

Route::get('/upload',[UploadController::class,'UploadForm']);
Route::post('/upload',[UploadController::class,'uploadFile'])->name('upload.uploadfile');

Route::get('/add-siswa',[SiswaController::class,'addSiswa']);
Route::post('/create-siswa',[SiswaController::class,'createSiswa'])->name('siswa.create');
Route::get('/siswas',[SiswaController::class,'getSiswa']);





Route::get('/', function () {
    return view('welcome');
});

Route::get('/edit-post', function () {
    return view('edit-post');
});
Route::get('/data-siswa', function () {
    return view('data-siswa');
});

Route::get('/home', function () {
    return view('home');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

