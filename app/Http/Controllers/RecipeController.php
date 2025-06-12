<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Masmerise\Toaster\Toaster;

class RecipeController extends Controller
{
    
public function index(Request $request)
{
    $perPage = $request->input('perPage', 5);

    // Start with recipes for the authenticated user.
    $query = Recipe::where('user_id', auth()->user()->id)
    ->orderBy('created_at', 'desc');

    // If a search keyword is provided, filter by title or ingredients.
    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where(function ($q) use ($search) {
            $q->where('title', 'LIKE', '%' . $search . '%')
              ->orWhere('ingredients', 'LIKE', '%' . $search . '%');
        });
    }

    // If a category filter is provided, apply it.
    if ($request->filled('category_id')) {
        $query->where('category_id', $request->input('category_id'));
    }
    //use this method if using eloquent ORM
    // if ($request->filled('category')) {
    //     $query->whereHas('category', function ($q) use ($request) {
    //         $q->where('id', $request->input('category'));
    //     });
    // }
    

    // Paginate the results.
    $recipes = $query->paginate($perPage);
    $categories = Category::all();

    // Return the view with recipes and perPage parameters.
    return view('recipe.index', [
        'recipes' => $recipes,
        'perPage' => $perPage,
        'categories' => $categories,
    ]);
}


    public function create(){
        // $categories = Category::all();
        $categories = Category::with('recipe')->get();
        return view('recipe.add-recipe',['categories' => $categories]);
    
    }
    public function store(Request $request){
        $validated = $request->validate([

            'title' => 'required|max:255',
            'category_id' => 'required',
            'ingredients' => 'required',
             'description' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
           
         // Store the image in the 'public' disk and get its path
    $imagePath = $request->file('image')->store('recipes', 'public');

        $recipes = new Recipe();
        $recipes->title = $request->title;
        $recipes->category_id = $request->category_id;
        $recipes->user_id = auth()->user()->id;
        $recipes->ingredients = $request->ingredients;
        $recipes->description = $request->description;
        $recipes->image = $imagePath;
       

        $recipes->save();

        Toaster::success('Recipe created!');
   
    return redirect()->route('recipe.index');
     
}
public function loadEditPage($id){
    $categories = Category::with('recipe')->get();
    $recipe = Recipe::with('category')->find($id);
       
    return view('recipe.edit-recipe',['categories' => $categories, 'recipe' => $recipe]);
}
public function update(Request $request, $id){
    $recipes = Recipe::find($id);

    $validated = $request->validate([
        'title' => 'required|max:255',
        'category_id' => 'required',
        'ingredients' => 'required',
        'description' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
    ]);

    if ($request->hasFile('image')) {
        // Delete the old image
        Storage::disk('public')->delete($recipes->image);

        // Store the new image
        $imagePath = $request->file('image')->store('recipes', 'public');
        $recipes->image = $imagePath;
    }

    $recipes->title = $request->title;
    $recipes->category_id = $request->category_id;
    $recipes->user_id = auth()->user()->id;
    $recipes->ingredients = $request->ingredients;
    $recipes->description = $request->description;

    $recipes->save();

    Toaster::success('Recipe updated!');

    return redirect()->route('recipe.index');
}
public function viewRecipe($id){
    $recipe = Recipe::with('category')->find($id);
  
   $user = $recipe->user;
   $imageCount = $user->recipe()->whereNotNull('image')->count();

   return view('recipe.view-recipe',compact('recipe','imageCount'));

}
public function deleteRecipe($id)
{
    // Find the recipe and delete it
    $recipe = Recipe::find($id);

    if ($recipe) {
        $recipe->delete();
        Toaster::success('Recipe deleted!');
        return redirect()->route('recipe.index');
    }
  
    Toaster::success('Recipe not found!');
    return redirect()->route('recipe.index');

}
public function loadRecipeCard($id){
    $recipe = Recipe::with('category')->find($id);
    return view('recipe.recipe-card',['recipe' => $recipe]);
}

}
