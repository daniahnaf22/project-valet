<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

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
    return view('index', ['title' => 'Home', 'active' => 'home']);
});

Route::get('/about', function () {
    return view('about', [
        'title'=> 'About Me',
        'nama' => 'Dani Ahnaf Falih',
        'no_tlp' => '081270597962',
        'alamat' => 'Siteba',
        'image' => 'FOTO DANI AHNAF FALIH.jpg',
        'jekel' => 1,
        'active' => 'about'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/single-post/{post:slug}', [PostController::class, 'single']);
Route::get('/posts/categories', function (){
    return view('posts.categories', [
        'title' => 'Category',
        'active' => 'category',
        'categories' => Category::all()
    ]);
});
Route::get('/posts/category/{category:slug}', function(Category $category){
    return view('posts.category', [
        'title' => "Post By : Category $category->name",
        'active' => 'posts',
        'posts' => $category->posts->load(['author'.'category'])
    ]);
});

Route::get('/posts/author/{user:username}', function (User $user){
    return view('posts.category',[
        'title' => "Post By : Author $user->name",
        'active' => 'posts',
        'posts' => $user->posts->load(['author' , 'category'])
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('login')->name('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');






//Barang
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/single-barang/{barang:no_resi}', [BarangController::class,'single']);

//Nilai
Route::get('/nilai', [NilaiController::class, 'indexNilai']);
Route::get('/nilai/single-nilai/{no_bp}', [NilaiController::class, 'singleNilai']);


//Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/single-mhs/{mhs:no_bp}', [MahasiswaController::class, 'single']);

//Dosen
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/single-dosen/{dosen:nidn}', [DosenController::class, 'single']);

Route::get('/dosen/jurusan/{jurusan:slug}', [JurusanController::class, 'jurusan_dsn']);
Route::get('/dosen/jurusans', [JurusanController::class, 'index_dsn']);


