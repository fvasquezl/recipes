<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Recipe;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class IngredientsController extends Controller
{

    public function create(Recipe $recipe)
    {
        return view('ingredients.create',compact('recipe'));
    }


    public function store(Request $request, Recipe $recipe)
    {

        $this->validate($request,[
            'name'=>'required',
        ]);
        $recipe->ingredients()->create($request->all());

        Alert::message('Your recipe has been created', 'success');

        return redirect('recipes/'.$recipe->id);
    }

    public function destroy(Recipe $recipe,Ingredient $ingredient)
    {
        $ingredient->delete();

        Alert::message('The Ingredient has been delete', 'warning');

        return redirect('recipes/'.$recipe->id);
    }

}

