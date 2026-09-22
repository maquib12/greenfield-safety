<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $blogs = Blog::query()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', '%' . $search . '%')
                    ->orWhere('category', 'like', '%' . $search . '%')
                    ->orWhere('slug', 'like', '%' . $search . '%');
                });
            })
            ->latest()
            ->paginate(5)->withQueryString();

        return view('admin.blogs', compact('blogs', 'search'));
    }

    public function create()
    {
        return view('admin.blog-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blogs,slug',
            'category' => 'required|string|max:100',
            'image' => 'nullable|string|max:1000',
            'excerpt' => 'nullable|string|max:1000',
            'content' => 'required|string',
        ]);

        $validated['slug'] = $validated['slug']
            ? Str::slug($validated['slug'])
            : Str::slug($validated['title']);

        Blog::create($validated);

        return redirect()
            ->route('admin.blogs')
            ->with('success', 'Blog created successfully.');
    }

    public function show(Blog $blog)
    {
        return view('admin.blog-show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog-edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blogs,slug,' . $blog->id,
            'category' => 'required|string|max:100',
            'image' => 'nullable|string|max:1000',
            'excerpt' => 'nullable|string|max:1000',
            'content' => 'required|string',
        ]);

        $validated['slug'] = $validated['slug']
            ? Str::slug($validated['slug'])
            : Str::slug($validated['title']);

        $blog->update($validated);

        return redirect()
            ->route('admin.blogs')
            ->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()
            ->route('admin.blogs')
            ->with('success', 'Blog deleted successfully.');
    }
}