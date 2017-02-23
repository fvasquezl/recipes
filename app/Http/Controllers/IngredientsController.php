<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Recipe;
use Illuminate\Http\Request;

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
      //  $recipe->ingredients()->create($request->all());
        return $recipe->name;

    }

}

