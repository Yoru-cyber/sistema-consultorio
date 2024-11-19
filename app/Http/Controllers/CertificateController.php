<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $certificates = Certificate::paginate(10);
        return view('certificate.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $patients = Patient::all();
        $doctors = Doctor::all();
        return view('certificate.create', compact('doctors', 'patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCertificateRequest $request)
    {
        //
        $validated = $request->validated(); // This will automatically validate based on the rules
        // Create a new recipe with the validated data
        Certificate::create($validated);
        return redirect()->route('certificate.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
        return view('certificate.show', compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
        $patients = Patient::all();
        $doctors = Doctor::all();
        return view('certificate.edit', compact('doctors', 'patients', 'certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        $validated = $request->validated(); // This will automatically validate based on the rules
        // Create a new recipe with the validated data
        $certificate->update($validated);
        return redirect()->route('certificate.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
        $certificate->delete();
        return redirect()->route('certificate.index');
    }
}
