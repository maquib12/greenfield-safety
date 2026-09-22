<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();

        return view('admin.courses', compact('courses'));
    }

    public function create()
    {
        return view('admin.course-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255|unique:courses,slug',
            'category' => 'required|string|max:100',
            'overview' => 'nullable|string',
            'description' => 'nullable|string',
            'topics' => 'nullable|string',
            'audience' => 'nullable|string',
        ]);

        $validated['slug'] = $validated['slug']
            ? \Illuminate\Support\Str::slug($validated['slug'])
            : \Illuminate\Support\Str::slug($validated['title']);

        $validated['topics'] = $validated['topics']
            ? array_values(
                array_filter(
                    array_map('trim', preg_split('/\R/', $validated['topics']))
                )
            )
            : [];

        Course::create($validated);

        return redirect()
            ->route('admin.courses')
            ->with('success', 'Course created successfully.');
    }

    public function show(Course $course)
    {
        return view('admin.course-show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('admin.course-edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255|unique:courses,slug,' . $course->id,
            'category' => 'required|string|max:100',
            'overview' => 'nullable|string',
            'description' => 'nullable|string',
            'topics' => 'nullable|string',
            'audience' => 'nullable|string',
        ]);

        $validated['slug'] = $validated['slug']
            ? \Illuminate\Support\Str::slug($validated['slug'])
            : \Illuminate\Support\Str::slug($validated['title']);

        $validated['topics'] = $validated['topics']
            ? array_values(
                array_filter(
                    array_map('trim', preg_split('/\R/', $validated['topics']))
                )
            )
            : [];

        $course->update($validated);

        return redirect()
            ->route('admin.courses')
            ->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('admin.courses')
            ->with('success', 'Course deleted successfully.');
    }
}