<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dasboardh\DasboardhController;
use App\Http\Controllers\Category\CategoriesController;
// Route::get('dashboard', function(){
// 	return "Admin Dashboard";
//  });
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
	return 'hihi';
 });
 

?>