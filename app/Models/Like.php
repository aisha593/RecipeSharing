<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $fillable = [
        'user_id',
        'recipe_id',
    ];

    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
