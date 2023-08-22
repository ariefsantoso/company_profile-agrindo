<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
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
    return view('index');
});

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About",
//         "active" => 'about',
//         "nama" => "sandhika",
//         "email" => "sandhika@gmail.com"
//     ]);
// });


Route::get('/blog', [PostController::class, 'index']);
// Route::get('/posts', [PostController::class, 'index']);
Route::get('/esg', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name", 
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'),

//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('is_admin');
// Route::resource('/dashboard/categories', AdminCategoryController::class);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/perontokpadi', function () {
    return view('produk.perontokpadi');
});
Route::get('/tp1000mg', function () {
    return view('produk.tp1000mg');
});
Route::get('/tp1000', function () {
    return view('produk.perontokpadi');
});
Route::get('/pj700', function () {
    return view('produk.pj700');
});

Route::get('/pembersih-gabah', function () {
    return view('produk.pembersih-gabah');
});
Route::get('/apc5', function () {
    return view('produk.apc5');
});
Route::get('/apc3', function () {
    return view('produk.apc3');
});
Route::get('/ascseries', function () {
    return view('produk.ascseries');
});
Route::get('/pcseries', function () {
    return view('produk.pcseries');
});
Route::get('/sca2h', function () {
    return view('produk.sca2h');
});
Route::get('/hu10pp', function () {
    return view('produk.hu10pp');
});
Route::get('/hu10mpc', function () {
    return view('produk.hu10mpc');
});
Route::get('/aw60', function () {
    return view('produk.aw60');
});
Route::get('/hc6bv', function () {
    return view('produk.hc6bv');
});
Route::get('/hc600', function () {
    return view('produk.hc600');
});

Route::get('/pemecah-kulit', function () {
    return view('produk.pemecah-kulit');
});

Route::get('/pemisah-menir', function () {
    return view('produk.pemisah-menir');
});
Route::get('/rps10a', function () {
    return view('produk.rps10a');
});
Route::get('/ars3000', function () {
    return view('produk.ars3000');
});
Route::get('/avs', function () {
    return view('produk.avs');
});

Route::get('/pemoles-beras', function () {
    return view('produk.pemoles-beras');
});
Route::get('/akb40', function () {
    return view('produk.akb40');
});


Route::get('/pengering-biji-bijian', function () {
    return view('produk.pengering-biji-bijian');
});

Route::get('/indirect', function () {
    return view('produk.indirect');
});
Route::get('/cyclonic', function () {
    return view('produk.cyclonic');
});
Route::get('/fluidized', function () {
    return view('produk.fluidized');
});
Route::get('/abd3200m_ahf', function () {
    return view('produk.abd3200m_ahf');
});
Route::get('/abd3200m_gas', function () {
    return view('produk.abd3200m_gas');
});
Route::get('/vrdseries', function () {
    return view('produk.vrdseries');
});
Route::get('/adlseries', function () {
    return view('produk.adlseries');
});

Route::get('/mesin-terintegrasi', function () {
    return view('produk.mesin-terintegrasi');
});
Route::get('/sb10d', function () {
    return view('produk.sb10d');
});
Route::get('/sb1000', function () {
    return view('produk.sb1000');
});
Route::get('/arm1000', function () {
    return view('produk.arm1000');
});
Route::get('/hps60b', function () {
    return view('produk.hps60b');
});
Route::get('/acm1000', function () {
    return view('produk.acm1000');
});
Route::get('/rmu2phase', function () {
    return view('produk.rmu2phase');
});
Route::get('/rmp3', function () {
    return view('produk.rmp3');
});
Route::get('/rmp5', function () {
    return view('produk.rmp5');
});

Route::get('/dryer-plant', function () {
    return view('produk.dryer-plant');
});
Route::get('/corn-dryer-plant', function () {
    return view('produk.corn-dryer-plant');
});
Route::get('/paddy-dryer-plant', function () {
    return view('produk.paddy-dryer-plant');
});
Route::get('/cleaner-plant', function () {
    return view('produk.cleaner-plant');
});

Route::get('/rubber-roll', function () {
    return view('produk.rubber-roll');
});
Route::get('/xl', function () {
    return view('produk.xl');
});
Route::get('/sc', function () {
    return view('produk.sc');
});
Route::get('/gt', function () {
    return view('produk.gt');
});
Route::get('/ca', function () {
    return view('produk.ca');
});
Route::get('/nz', function () {
    return view('produk.nz');
});
Route::get('/gr', function () {
    return view('produk.gr');
});
Route::get('/gl', function () {
    return view('produk.gl');
});
Route::get('/tr', function () {
    return view('produk.tr');
});

Route::get('/tractor-tangan', function () {
    return view('produk.tractor-tangan');
});
Route::get('/kai711', function () {
    return view('produk.kai711');
});
Route::get('/trg1a', function () {
    return view('produk.trg1a');
});
Route::get('/trg700', function () {
    return view('produk.trg700');
});

Route::get('/sparepart', function () {
    return view('produk.sparepart');
});
Route::get('/fasilitas', function () {
    return view('produk.fasilitas');
});
Route::get('/quality', function () {
    return view('produk.quality');
});
Route::get('/career', function () {
    return view('produk.career');
});
