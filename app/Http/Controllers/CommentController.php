<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Recipe;
use App\Models\User;
use App\Notifications\CommentNotification;
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

    $posterId = Recipe::find($recipeId)->user_id;
    $user = User::find($posterId);
    $user->notify(new CommentNotification($comments));

    Toaster::success('comment sent!');

    $recipe = Recipe::find($recipeId);
    return redirect()->route('recipe.RecipeCard', ['id' => $recipeId,'recipe' =>$recipe]); // Replace $recipeId with the actual recipe ID
 
    }
    //displaying comment
    public function index($id){
        $comment = Comment::with('user')->where('recipe_id', $id)->latest()->get();
        return view('comment.comment-index', ['comment' => $comment]);
    }
  
}
