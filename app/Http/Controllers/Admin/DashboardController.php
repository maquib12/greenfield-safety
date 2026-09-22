<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Certificate;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {
        $contactCount = ContactMessage::count();
        $certificateCount = Certificate::count();
        $blogCount = Blog::count();

        $recentMessages = ContactMessage::latest()
            ->take(5)
            ->get();

        $recentCertificates = Certificate::latest()
            ->take(5)
            ->get();

        $recentBlogs = Blog::latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'contactCount',
            'certificateCount',
            'blogCount',
            'recentMessages',
            'recentCertificates',
            'recentBlogs'
        ));
    }
}