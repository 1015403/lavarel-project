<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function showAll() {
        $Recipes = Recipe::with('user')->get();
        return view('home', ['Recipes'=>$Recipes]);
    }


}
