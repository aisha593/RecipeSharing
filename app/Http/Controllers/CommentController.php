<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Masmerise\Toaster\Toaster;

class CommentController extends Controller
{
    //
    
public function saveComment(Request $request,$recipeId){
    $request->validate([
        'comment' => 'required|string|max:255'
    ]);

    $comments = new Comment();
    $comments->comment = $request->comment;
    $comments->user_id = auth()->user()->id;
    $comments->recipe_id = $recipeId;
    $comments->save();

    Toaster::success('comment sent!');

    $recipe = Recipe::find($recipeId);
    return redirect()->route('recipe.viewRecipe', ['id' => $recipeId]); // Replace $recipeId with the actual recipe ID
 // return view('recipe.view-recipe',['recipe'=>$recipe]);
    }
  
}
