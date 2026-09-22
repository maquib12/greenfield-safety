<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->get();

        return view('admin.certificates', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificate-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'certificate_number' => 'required|string|max:100|unique:certificates,certificate_number',
            'participant_name' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'issue_date' => 'required|date',
            'expiry_date' => 'nullable|date|after_or_equal:issue_date',
            'status' => 'required|in:valid,expired,revoked',
        ]);

        Certificate::create($validated);

        return redirect()
            ->route('admin.certificates')
            ->with('success', 'Certificate added successfully.');
    }

    public function show(Certificate $certificate)
    {
        return view('admin.certificate-show', compact('certificate'));
    }

    public function edit(Certificate $certificate)
    {
        return view('admin.certificate-edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $validated = $request->validate([
            'certificate_number' => 'required|string|max:100|unique:certificates,certificate_number,' . $certificate->id,
            'participant_name' => 'required|string|max:255',
            'course_name' => 'required|string|max:255',
            'issue_date' => 'required|date',
            'expiry_date' => 'nullable|date|after_or_equal:issue_date',
            'status' => 'required|in:valid,expired,revoked',
        ]);

        $certificate->update($validated);

        return redirect()
            ->route('admin.certificates')
            ->with('success', 'Certificate updated successfully.');
    }

    public function destroy(Certificate $certificate)
    {
        $certificate->delete();

        return redirect()
            ->route('admin.certificates')
            ->with('success', 'Certificate deleted successfully.');
    }
}