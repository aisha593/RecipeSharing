<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/add/recipe', [RecipeController::class, 'store'])->name('recipe.store');

Route::get('/add/recipe', [RecipeController::class, 'create'])->name('recipe.create');

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipe.index');

Route::get('/edit/recipe/{id}',[RecipeController::class, 'loadEditPage']);

Route::post('/edit/recipe/{id}',[RecipeController::class, 'Update'])->name('recipe.update');

Route::get('/view/recipe/{id}',[RecipeController::class, 'viewRecipe'])->name('recipe.viewRecipe');

Route::get('/delete-recipe/{id}', [RecipeController::class, 'deleteRecipe'])->name('delete.recipe');

//category
Route::post('/add/category', [CategoryController::class, 'store'])->name('category.store');

Route::get('/add/category', [CategoryController::class, 'create'])->name('category.create');

Route::get('/categories', [CategoryController::class, 'loadCategoriesPage'])->name('category.categories');
//user profile
Route::post('/user/profile',[ProfileController::class, 'save'])->name('user.profile');

//comment
Route::post('/comments/save/{recipeId}',[CommentController::class, 'saveComment'])->name('comment.save');
require __DIR__.'/auth.php';
