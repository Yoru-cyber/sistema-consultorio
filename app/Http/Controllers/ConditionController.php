<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreConditionRequest;
use App\Http\Requests\UpdateConditionRequest;
class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $conditions = Condition::paginate(10);
        return view('condition.index', compact('conditions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConditionRequest $request): RedirectResponse
    {
        //
        $validated = $request->validated(); // This will automatically validate based on the rules

        // Create a new patient with the validated data
        Condition::create($validated);

        return redirect()->route('condition.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('condition.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Condition $condition): View
    {
        return view('condition.show', compact('condition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Condition $condition): View
    {
        //
        return view('condition.edit', compact('condition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConditionRequest $request, Condition $condition): RedirectResponse
    {
        //
        $validated = $request->validated(); // This will automatically validate based on the rules
        // Create a new Condition with the validated data
        $condition->update($validated);
        return redirect()->route('condition.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Condition $condition): RedirectResponse
    {
        //
        $condition->delete();
        return redirect()->route('condition.index');
    }
}
