<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Masmerise\Toaster\Toaster;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('category.add-category');
    }

    public function create(){
        return view('category.add-category');
    }

    public function store(Request $request){
        $validated = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        ]);
        
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        Toaster::success('Category created!');

     return view('category.add-category');
    }
}
