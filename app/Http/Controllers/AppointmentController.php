<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use Illuminate\Support\Facades\Log;
class AppointmentController extends Controller
{
    /**
     * Display a list of appointments.
     */
    public function index()
    {
        //
        $appointments = Appointment::paginate(10);
        return view('appointment.index', compact('appointments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentRequest $request)
    {
        $validated = $request->validated(); // This will automatically validate based on the rules

        // Create a new appointment with the validated data
        Appointment::create($validated);

        return redirect()->route('appointment.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('appointment.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
        return view('appointment.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
        return view('appointment.edit', ['appointment' => $appointment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        //
        Log::info($request->all());
        $validated = $request->validated();
        $appointment->update($validated);
        return redirect()->route('appointment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
        $appointment->delete();
        return redirect()->route('appointment.index');
    }
}
