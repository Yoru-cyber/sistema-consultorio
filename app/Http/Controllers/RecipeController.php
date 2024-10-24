<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $recipes = Recipe::with('patient', 'doctor')->get();
        return view('recipe.index', compact('recipes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecipeRequest $request):RedirectResponse
    {
        //
        $validated = $request->validated(); // This will automatically validate based on the rules

        // Create a new patient with the validated data
        Recipe::create($validated);

        return redirect()->route('recipe.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('recipe.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe): View
    {
        return view('recipe.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe): View
    {
        //
        return view('recipe.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe): RedirectResponse
    {
        //
        $validated = $request->validated(); // This will automatically validate based on the rules
        // Create a new recipe with the validated data
        $recipe->update($validated);
        return redirect()->route('recipe.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe): RedirectResponse
    {
        //
        $recipe->delete();
        return redirect()->route('recipe.index');
    }
}
