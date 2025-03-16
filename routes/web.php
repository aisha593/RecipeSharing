<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;







Route::get('/', function () {
     // Fetch the recipes, ordered by the most recent first
     $recipes = Recipe::latest()->get();
    return view('welcome', compact('recipes'));
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

Route::get('/recipe/card/{id}',[RecipeController::class, 'loadRecipeCard'])->name('recipe.RecipeCard');
//category
Route::post('/add/category', [CategoryController::class, 'store'])->name('category.store');

Route::get('/add/category', [CategoryController::class, 'create'])->name('category.create');

Route::get('/edit/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');

Route::post('/edit/category/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/delete-category/{id}',[CategoryController::class, 'delete']);

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
//user profile
Route::post('/user/profile',[ProfileController::class, 'save'])->name('user.profile');

//comment
Route::post('/comments/save/{recipeId}',[CommentController::class, 'saveComment'])->name('comment.save');

Route::post('/like', [LikeController::class, 'toggleLike'])->name('like.toggle');

Route::get('/comment/{id}', [CommentController::class, 'index'])->name('comment.index');


//notification
Route::get('/notifications', [NotificationController::class, 'index'])->name('notification.index');

//likes
Route::post('/likes/{recipeId}', [LikeController::class, 'like'])->name('like.store');




require __DIR__.'/auth.php';


