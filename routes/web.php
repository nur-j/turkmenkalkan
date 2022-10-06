<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;

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

/* ===============  ADMIN ROUTES =================== */
Route::prefix('admin/kalkan/')->group(function () {
    Route::get('/', function() {
        return view('back.index');
    });  
    
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});




/* ============  FRONT ROUTES ==================== */

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/category/{id}', [PageController::class, 'products_by_category'])->name('products.category');
Route::get('/products/search', [PageController::class, 'product_search'])->name('product.search');
Route::get('/products/{id}', [PageController::class, 'product_single'])->name('product.single');

Route::get('/contact', [PageController::class, 'contact'])->name('contact.page');
Route::get('/news', [PageController::class, 'news'])->name('news.page');
Route::get('/about', [PageController::class, 'about'])->name('about.page');
Route::get('/markets', [PageController::class, 'markets'])->name('markets');

/* Change lang */
Route::get('/change-lang/{lang}', [LanguageController::class, 'changeLang'])->name('change.lang');
