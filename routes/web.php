<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
     // Fetch the recipes, ordered by the most recent first
     $recipes = Recipe::latest()->get();
     $categories = Category::all();
    return view('welcome', compact('recipes', 'categories'));
})->name('home');

Route::get('/dashboard', function () {
    $postsCount = Recipe::where('user_id', operator: auth()->id())->count();
    $postsCountAll = Recipe::count();

    $usersCount = User::count();
    $categoriesCount = Category::count();
    $likesCount = Like::where('user_id', auth()->id())->count();
    $likesCountAll = Like::count();

    $commentsCount = Comment::where('user_id', operator: auth()->id())->count();
    $commentsCountAll = Comment::count();

    return view('dashboard', compact('postsCount', 'usersCount', 'categoriesCount', 'likesCount','likesCountAll','commentsCount','commentsCountAll','postsCountAll'));
})->middleware(['auth', 'verified','super-admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::middleware(['auth','super-admin'])->group(function () {

Route::post('/add/recipe', [RecipeController::class, 'store'])->name('recipe.store');

Route::get('/add/recipe', [RecipeController::class, 'create'])->name('recipe.create');

Route::get('/delete-recipe/{id}', [RecipeController::class, 'deleteRecipe'])->name('delete.recipe');

Route::get('/edit/recipe/{id}',[RecipeController::class, 'loadEditPage']);

Route::post('/edit/recipe/{id}',[RecipeController::class, 'Update'])->name('recipe.update');
//Only Admin
Route::get('/all/recipes', [RecipeController::class, 'showAllRecipes'])->name('recipe.showAll');

//categories
Route::post('/add/category', [CategoryController::class, 'store'])->name('category.store');

Route::get('/category/add', [CategoryController::class, 'create'])->name('category.create');

Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');

Route::post('/edit/category/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/delete-category/{id}',[CategoryController::class, 'delete']);

//notification
Route::get('/notifications', [NotificationController::class, 'index'])->name('notification.index');

//manage user
Route::get('/add/user', [UserController::class, 'addUser'])->name('add.user');
Route::post('/add/user', [UserController::class, 'storeUser'])->name('store.user');
Route::get('/delete/user/{id}', [UserController::class, 'deleteUser'])->name('delete.user');
Route::get('/edit/user/{id}', [UserController::class, 'editUser'])->name('edit.user');
Route::post('/edit/user/{id}', [UserController::class, 'updateUser'])->name('update.user');
Route::get('/view/user/{id}', [UserController::class, 'viewUser'])->name('view.user');
Route::get('/users', [UserController::class, 'showUser'])->name('show.users');

});
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipe.index');

Route::get('/view/recipe/{id}',[RecipeController::class, 'viewRecipe'])->name('recipe.viewRecipe');


Route::get('/recipe/card/{id}',[RecipeController::class, 'loadRecipeCard'])->name('recipe.RecipeCard');
//category

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/items/{id}', [CategoryController::class, 'showCategory'])->name('category.item');
//user profile
Route::post('/user/profile',[ProfileController::class, 'save'])->name('user.profile');

//comment
Route::post('/comments/save/{recipeId}',[CommentController::class, 'saveComment'])->name('comment.save');

Route::post('/like', [LikeController::class, 'toggleLike'])->name('like.toggle');

Route::get('/comment/{id}', [CommentController::class, 'index'])->name('comment.index');


//likes
Route::post('/likes/{recipeId}', [LikeController::class, 'like'])->name('like.store');

require __DIR__.'/auth.php';



