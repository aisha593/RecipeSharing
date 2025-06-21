<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Recipe;
use App\Notifications\LikeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    //
    public function like($recipeId){
        $userId = Auth::user()->id;
        $likeExist = Like::where('user_id', $userId)->where('recipe_id', $recipeId)->first();
        if($likeExist){
            $likeExist->delete();
        }
        else{
        $likes = new Like();
        $likes->user_id = Auth::user()->id;
        $likes->recipe_id = $recipeId;
        $likes->save();

        $user = Recipe::find($recipeId)->user;
        $user->notify(new LikeNotification($likes));
        }

        return back()->with('success', value: 'Recipe liked!');
        
    }
}
