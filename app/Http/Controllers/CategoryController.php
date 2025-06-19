<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Masmerise\Toaster\Toaster;

class CategoryController extends Controller
{
    public function index(Request $request)
{
    $perPage = $request->input('perPage', 5);

    // Start the query for retrieving categories.
    $query = Category::query();

    // If a search keyword is provided, filter categories by name.
    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where('name', 'LIKE', '%' . $search . '%')
        ->orWhere('description', 'LIKE', '%' . $search . '%');
    }

    // Paginate the results.
    $categories = $query->paginate($perPage);

    // Return the view with the paginated categories and perPage value.
    return view('category.manage-category', [
        'categories' => $categories,
        'perPage' => $perPage,
        'search' => $search ?? '', // Ensure search is passed to the view, even if empty
    ]);
}


    public function create(){
        return view('category.add-category');
    }

    public function store(Request $request){
        $validated = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240', 
        ]);
       $imagePath = $request->file('image')->store('categories', 'public');


        
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $imagePath;


        $category->save();

        Toaster::success('Category created!');

    
     return redirect()->route('category.index');
    }
    public function edit($id){
        $category = Category::find($id);
        return view('category.edit-category',compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        // Update fields
        $category->name = $validated['name'];
        $category->description = $validated['description'];

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories', 'public');
            $category->image = $imagePath;
        }

        $category->save();

        Toaster::success('Category updated!');

        return redirect()->route('category.index');
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        Toaster::success('Category deleted Successfully!');

        return redirect()->route('category.index');
    }
    public function showCategory(Request $request, $id)
    {
        $category = Category::find($id);

        $query = Recipe::where('category_id', $id);

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('title', 'LIKE', '%' . $search . '%');
        }

        $recipes = $query->get(); // now get the filtered results

        if ($recipes->isEmpty()) {
            Toaster::info('No recipes found in this category.');
            return redirect()->route('home');
        }

        return view('category.category-items', compact('recipes', 'category'));
    }

}
