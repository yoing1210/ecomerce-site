<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Pesanan;
use App\Models\Category;
use App\Models\validasi;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostImageController;
use App\Http\Controllers\DashboardPostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index'],)->name("home");


Route::post('/send', [ProfileController::class,'wa']);
    


Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "active" => 'about'
    ]);
})->name("about");


Route::get('/layanan', function () {
    return view ('layanan', [
        "title" => "Layanan",
        "active" => 'layanan'
    ]);
})->name("layanan");

Route::get('/aboutMebel', function () {
    return view ('aboutMebel', [
        "title" => "MebelPuji",
        "active" => 'aboutMebel'
    ]);
})->name("aboutMebel");


Route::get('/FAQ', function () {
    return view ('FAQ', [
        "title" => "FAQ",
        "active" => 'FAQ'
    ]);
})->name("FAQ");


Route::get('/cart', [PostController::class,'cart'])->name("cart")->middleware('auth');

Route::delete('/cart/{id}',[PostController::class,'delete']); 


Route::post('konfirmasi-cart',[PostController::class,'konfirmasi']); 
// Route::post('/cart',[PostController::class,'total']); 

// halaman single  

Route::get('/posts',[PostController::class, 'index'],)->name("post");


Route::get('/posts/{post:slug}',[PostController::class, 'show']) ;

Route::post('/posts/{post:slug}',[PostController::class,'post']) ->middleware('auth');

Route::get('konfirmasi-status/{id}',[PostController::class,'status']);

Route::get('batalkan/{id}',[PostController::class,'batalkan']); 


// route untuk validasi transaksi
Route::post('/history/{id}',[PostController::class,'validasi']) ->middleware('auth');
// untuk hapus validasi
Route::delete('/dashboard',[PostController::class,'destroy']);




// edit pesanan
Route::get('editCart/{id}',[PostController::class,'edit']);

Route::post('editCart/{id}',[PostController::class,'update']);




Route::get('/produk', function(){
    return view('categories',[
        'title' => 'Produk',
        "active" => 'produk',
        'categories' => Category::all(),
        'posts' => Post::all()
    ]);
})->name("cat");

Route::get('/categories/{category:slug}',function(Category $category){
    return view('posts',[
        'title' => "$category->slug",
        "active" => 'produk',
        'posts' => $category->posts->load('category'),
    ]);
});

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title' => "Post by Author : $author->name",
//         'posts' => $author->posts->load('category','author'),
//     ]);
// });

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login',[LoginController::class, 'authenticate']); 
Route::post('/logout',[LoginController::class, 'logout']); 

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest'); 
Route::post('/register',[RegisterController::class, 'store']); 
// Route::get('/dashboard',function(){
//     return view('dashboard.index');
// })->middleware('admin');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('admin');

Route::get('/dashboard/categories/checkSlug', [CategoryController::class, 'checkSlug'])
->middleware('admin');
 
Route::resource('/dashboard/posts', DashboardPostController::class);




// Route::get('/post-images/{id}',[CategoryController::class, 'images'])->name('post_images');

Route::resource('/dashboard/categories', CategoryController::class)->except('show')->middleware('admin');




// Route::get('/pesan/{id}',[PesanController::class, 'index']);



Route::get('profile',[ProfileController::class,'index'])->middleware('auth');
Route::post('profile',[ProfileController::class,'update'])->middleware('auth');

Route::get('history',[HistoryController::class,'index'])->middleware('auth');
Route::get('history/{id}',[HistoryController::class,'detail'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');
Route::get('dashboard/{id}',[DashboardController::class,'detail'])->middleware('auth');


// cek relasi
Route::get('/check',function(){
    return validasi::with(['pesanan'])->get();
});






// Route::post('/history', [PesanController::class, 'post']);