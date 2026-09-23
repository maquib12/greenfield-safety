<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = collect([
            [
                'loc' => route('home'),
                'lastmod' => now()->toDateString(),
            ],
            [
                'loc' => route('about'),
                'lastmod' => now()->toDateString(),
            ],
            [
                'loc' => route('training'),
                'lastmod' => now()->toDateString(),
            ],
            [
                'loc' => route('consultancy'),
                'lastmod' => now()->toDateString(),
            ],
            [
                'loc' => route('contact'),
                'lastmod' => now()->toDateString(),
            ],
            [
                'loc' => route('certificate.verify'),
                'lastmod' => now()->toDateString(),
            ],
            [
                'loc' => route('blogs'),
                'lastmod' => now()->toDateString(),
            ],
        ]);

        $courses = Course::orderBy('updated_at', 'desc')->get();

        foreach ($courses as $course) {
            $urls->push([
                'loc' => route('course.details', $course->slug),
                'lastmod' => $course->updated_at->toDateString(),
            ]);
        }

        $blogs = Blog::orderBy('updated_at', 'desc')->get();

        foreach ($blogs as $blog) {
            $urls->push([
                'loc' => route('blog.details', $blog->slug),
                'lastmod' => $blog->updated_at->toDateString(),
            ]);
        }

        return response()
            ->view('sitemap', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }
}