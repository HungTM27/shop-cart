<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dasboardh\DasboardhController;
use App\Http\Controllers\Category\CategoriesController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('dashboard',[DasboardhController::class, 'dashboard'])->name('dashboard.index');
 Route::prefix('danh-muc')->group(function(){
	Route::get('/',[CategoriesController::class, 'index'])->name('categories.index');
	Route::get('them-moi',[CategoriesController::class, 'Save'])->name('categories.save');
	Route::post('them-moi',[CategoriesController::class, 'CreateSave']);
	Route::get('sua-danh-muc/{id}',[CategoriesController::class, 'Edit'])->name('categories.edit');
	Route::post('sua-danh-muc/{id}',[CategoriesController::class, 'SaveEdit']);
	Route::get('xoa-danh-muc/{id}',[CategoriesController::class, 'remove'])->name('categories.remove');
 });
 Route::prefix('san-pham')->group(function () {
	Route::get('/',[ProductController::class, 'index'])->name('product.index');
 });
Route::prefix('tai-khoan')->group(function () {
    Route::get('/', [RegisterController::class, 'index'])->name('register');
    Route::get('sua-tai-khoan/{id}', [RegisterController::class, 'Edit'])->name('register.edit');
    Route::post('sua-tai-khoan/{id}', [RegisterController::class, 'SaveEditRegister']);
});


?>