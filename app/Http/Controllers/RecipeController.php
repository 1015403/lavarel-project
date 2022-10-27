<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
//    public function showAll() {
//        $Recipes = Recipe::with('user')->get();
//        return view('home', ['Recipes'=>$Recipes]);
//    }

    public function index() {
        $recipes = Recipe::all();

        return view('recipes.index', compact('recipes'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'ingredients' => 'required',
        ]);

        $request->recipes()->create($request->all());

        return redirect()->route('recipes.index')
            ->with('succes', 'Product created succesfully');
    }

    public function show(Recipe $recipe){
        return view('recipes.show', compact('recipe'));
    }

    public function edit(Recipe $recipe) {
        return view('recipes.edit', compact('recipe'));
    }

    public function update(Request $request, Recipe $recipe) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'ingredients' => 'required',
        ]);

        $recipe->update($request->all());

        return redirect()->route('recipes.index')
            ->with('succes', 'Product updated succesfully');
    }

    public function destroy(Recipe $recipe) {
        $recipe->delete();

        return redirect()->route('recipes.index')
            ->with('succes', 'Product deleted succesfully');
    }
}
