<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Masmerise\Toaster\Toaster;

class RecipeController extends Controller
{
    //
    public function index(){
        $recipes = Recipe::all();
        return view('recipe.index',['recipes' => $recipes]);
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
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
           // Check if the  is authenticated
    // if (!auth()->check()) {
    //     return redirect()->route('lousergin')->with('error', 'You must be logged in to create a recipe.');
    // }

      
         // Store the image in the 'public' disk and get its path
    $imagePath = $request->file('image')->store('recipes', 'public');

        // Generate the URL for the image that means the imageurl in db will be /storage/recipes/filename.jpg 
        // $imageUrl = Storage::url($imagePath);

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
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
    $categories = Category::with('recipe')->get();
    return view('recipe.view-recipe',compact('recipe','categories'));
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

}
