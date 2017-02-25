<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Recipe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return string
     */
    public function index(Request $request)
    {
        $recipes = Recipe::where('user_id',$request->user()->id)->get();
        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
        ]);

        Auth::user()->recipes()->create($request->all());

        Alert::message('Your recipe has been created', 'success');

        return redirect('recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param Recipe $recipe
     * @return \Illuminate\Http\Response
     * @internal param User $user
     * @internal param int $id
     */
    public function show(Recipe $recipe)
    {
        $ingredients = Ingredient::where('recipe_id',$recipe->id)->get();
        return view('recipes.show',compact('recipe','ingredients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Recipe $recipe
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit',compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Recipe $recipe
     * @return \Illuminate\Http\Response
     * @internal param User $user
     * @internal param int $id
     */
    public function update(Request $request, Recipe $recipe)
    {
        $this->validate($request,[
            'name'=>'required',
        ]);

        $recipe->update($request->all());

        Alert::message('Your recipe has been updated', 'success');

        return redirect('recipes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Recipe $recipe
     * @return \Illuminate\Http\Response
     * @internal param User $user
     * @internal param int $id
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        Alert::message('The recipe has been delete', 'success');

        return redirect('recipes');
    }
}
