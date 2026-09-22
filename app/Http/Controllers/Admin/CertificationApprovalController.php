<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CertificationApproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CertificationApprovalController extends Controller
{
    public function index()
    {
        $certifications = CertificationApproval::orderBy('display_order')
            ->orderBy('name')
            ->get();

        return view('admin.certifications', compact('certifications'));
    }

    public function create()
    {
        return view('admin.certification-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:certification_approvals,slug',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'display_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['slug'] = $validated['slug']
            ? Str::slug($validated['slug'])
            : Str::slug($validated['name']);

        $validated['image'] = $request->file('image')
            ->store('certifications', 'public');

        $validated['display_order'] = $validated['display_order'] ?? 0;
        $validated['is_active'] = $request->boolean('is_active');

        CertificationApproval::create($validated);

        return redirect()
            ->route('admin.certifications')
            ->with('success', 'Certification added successfully.');
    }
    
    public function show(CertificationApproval $certification)
    {
        return view('admin.certification-show', compact('certification'));
    }

    public function edit(CertificationApproval $certification)
    {
        return view('admin.certification-edit', compact('certification'));
    }

    public function update(Request $request, CertificationApproval $certification)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:certification_approvals,slug,' . $certification->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'display_order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['slug'] = $validated['slug']
            ? Str::slug($validated['slug'])
            : Str::slug($validated['name']);

        if ($request->hasFile('image')) {
            if ($certification->image) {
                Storage::disk('public')->delete($certification->image);
            }

            $validated['image'] = $request->file('image')
                ->store('certifications', 'public');
        }

        $validated['display_order'] = $validated['display_order'] ?? 0;
        $validated['is_active'] = $request->boolean('is_active');

        $certification->update($validated);

        return redirect()
            ->route('admin.certifications')
            ->with('success', 'Certification updated successfully.');
    }

    public function destroy(CertificationApproval $certification)
    {
        if ($certification->image) {
            Storage::disk('public')->delete($certification->image);
        }

        $certification->delete();

        return redirect()
            ->route('admin.certifications')
            ->with('success', 'Certification deleted successfully.');
    }
}