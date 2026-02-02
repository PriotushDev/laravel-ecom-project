<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


Route::get('/', [WebsiteController::class, 'index'])->name('website.home');
Route::get('/product-category/{id}', [WebsiteController::class, 'category'])->name('website.category');
Route::get('/product-detail/{id}', [WebsiteController::class, 'product'])->name('website.product');

//Cart Route
Route::post('/add-to-cart/{id}', [CartController::class, 'addTocart'])->name('cart.add');
Route::get('/show-cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/show-update/{rowId}', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/cart-remove/{rowId}', [CartController::class, 'removeCart'])->name('cart.remove');

//Checkout Route
Route::get('/checkout-page', [CheckoutController::class, 'index'])->name('checkout.page');
Route::post('/checkout/new-order', [CheckoutController::class, 'newOrder'])->name('checkout.new.order');
Route::get('/checkout/complete-order', [CheckoutController::class, 'completeOrder'])->name('checkout.complete.order');

//Middleware Route
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    //Categroy Route
    Route::get('/category-add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category-store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category-manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/category-delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/category-updateHomeStatus/{id}', [CategoryController::class, 'updateHomeStatus'])->name('category.updateHomeStatus');

    //Brand Route
    Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/brand', [BrandController::class, 'updateBrand'])->name('brand.update');
    Route::get('/brand/delete/brand/{id}', [BrandController::class, 'deleteBrand'])->name('brand.delete');

    //Sub-Category Route
    Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('sub.category.index');
    Route::get('/sub-category/create', [SubCategoryController::class, 'create'])->name('sub.category.create');
    Route::post('/sub-category/store', [SubCategoryController::class, 'store'])->name('sub.category.store');
    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub.category.edit');
    Route::post('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('sub.category.update');
    Route::get('/sub-category/delete', [SubCategoryController::class, 'delete'])->name('sub.category.delete');


    //Unit Route
    Route::get('/unit', [UnitController::class, 'index'])->name('unit.index');
    Route::get('/unit/create', [UnitController::class, 'create'])->name('unit.create');
    Route::post('/unit/store', [UnitController::class, 'store'])->name('unit.store');
    Route::get('/unit/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('/unit/update/unit', [UnitController::class, 'updateUnit'])->name('unit.update');
    Route::get('/unit/delete/unit/{id}', [UnitController::class, 'deleteUnit'])->name('unit.delete');


    //Product Route
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/get-sub-category-by-category-id', [ProductController::class, 'getSubCategory'])->name('get-sub-category-by-category-id');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/delail/{id}', [ProductController::class, 'delail'])->name('product.delail');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

    //cus


});
