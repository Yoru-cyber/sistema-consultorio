<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;
use App\Models\Condition;
use Illuminate\Support\Facades\Log;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $patients = Patient::paginate(10);
        return view('patient.index', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        $validated = $request->validated(); // This will automatically validate based on the rules

        // Create a new patient with the validated data
        $patient = Patient::create($validated);
        $patient->conditions()->attach($request->conditions);

        return redirect()->route('patient.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $conditions = Condition::all();
        return view('patient.create', compact('conditions'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
        return view('patient.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
        $conditions = Condition::all();
        return view('patient.edit', compact('patient','conditions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
        Log::info($request->all());
        $validated = $request->validated();
        $patient->update($validated);
        $patient->conditions()->sync($request->conditions);
        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
        $patient->delete();
        return redirect()->route('patient.index');
    }
}
