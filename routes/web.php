<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Data\CourseData;
use App\Http\Controllers\CertificateController;
use App\Data\BlogData;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\CertificateController as AdminCertificateController;
use App\Http\Controllers\Admin\BlogController;
use App\Models\Blog;
use App\Http\Controllers\Admin\CourseController;
use App\Models\Course;
use App\Http\Controllers\Admin\CertificationApprovalController;
use App\Http\Controllers\SitemapController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {

    $course = request('course');

    return view('contact', compact('course'));

})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

Route::get('/training', function () {

    $trainingCourses = Course::orderBy('category')
        ->orderBy('title')
        ->get();

    return view('training', compact('trainingCourses'));

})->name('training');

Route::get('/training/{course}', function ($course) {

    $courseData = Course::where('slug', $course)->first();

    if (!$courseData) {
        abort(404);
    }

    return view('course-details', [
        'course' => $courseData->slug,
        'courseData' => [
            'title' => $courseData->title,
            'short_title' => $courseData->short_title,
            'overview' => $courseData->overview,
            'description' => $courseData->description,
            'topics' => $courseData->topics ?? [],
            'audience' => $courseData->audience,
        ],
    ]);

})->name('course.details');


Route::get('/consultancy', function () {
    return view('consultancy');
})->name('consultancy');

Route::get('/verify-certificate', function () {
    return view('verify-certificate');
})->name('certificate.verify');

Route::post('/verify-certificate', [CertificateController::class, 'verify'])
    ->name('certificate.verify.submit');

Route::get('/blogs', function () {

    $blogs = Blog::latest()->get();
    return view('blogs', compact('blogs'));

})->name('blogs');

Route::get('/blogs/{slug}', function ($slug) {

    $blog = Blog::where('slug', $slug)->first();

    if (!$blog) {
        abort(404);
    }

    return view('blog-details', compact('blog'));

})->name('blog.details');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])
    ->name('sitemap');

Route::prefix('admin')->group(function () {

    // Public admin login routes

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('admin.login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('admin.login.submit');
});


Route::prefix('admin')->middleware('auth:admin')->group(function () {

    // Dashboard

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');


    // Contact Messages

    Route::get('/contact-messages', [ContactMessageController::class, 'index'])
        ->name('admin.contact-messages');

    Route::get(
        '/contact-messages/{contactMessage}',
        [ContactMessageController::class, 'show']
    )->name('admin.contact-messages.show');

    Route::delete(
        '/contact-messages/{contactMessage}',
        [ContactMessageController::class, 'destroy']
    )->name('admin.contact-messages.destroy');


    // Certificates

    Route::get('/certificates', [AdminCertificateController::class, 'index'])
        ->name('admin.certificates');

    Route::get('/certificates/create', [AdminCertificateController::class, 'create'])
        ->name('admin.certificates.create');

    Route::post('/certificates', [AdminCertificateController::class, 'store'])
        ->name('admin.certificates.store');

    Route::get('/certificates/{certificate}/edit', [AdminCertificateController::class, 'edit'])
        ->name('admin.certificates.edit');

    Route::put('/certificates/{certificate}', [AdminCertificateController::class, 'update'])
        ->name('admin.certificates.update');

    Route::delete('/certificates/{certificate}', [AdminCertificateController::class, 'destroy'])
        ->name('admin.certificates.destroy');

    Route::get('/certificates/{certificate}', [AdminCertificateController::class, 'show'])
        ->name('admin.certificates.show');


    // Blogs

    Route::get('/blogs', [BlogController::class, 'index'])
        ->name('admin.blogs');

    Route::get('/blogs/create', [BlogController::class, 'create'])
        ->name('admin.blogs.create');

    Route::post('/blogs', [BlogController::class, 'store'])
        ->name('admin.blogs.store');

    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])
        ->name('admin.blogs.edit');

    Route::put('/blogs/{blog}', [BlogController::class, 'update'])
        ->name('admin.blogs.update');

    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])
        ->name('admin.blogs.destroy');

    Route::get('/blogs/{blog}', [BlogController::class, 'show'])
        ->name('admin.blogs.show');

    Route::get('/courses', [CourseController::class, 'index'])
        ->name('admin.courses');

    Route::get('/courses/create', [CourseController::class, 'create'])
        ->name('admin.courses.create');
    Route::post('/courses', [CourseController::class, 'store'])
        ->name('admin.courses.store');
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])
        ->name('admin.courses.edit');
    Route::put('/courses/{course}', [CourseController::class, 'update'])
        ->name('admin.courses.update');
    Route::get('/courses/{course}', [CourseController::class, 'show'])
        ->name('admin.courses.show');
    Route::delete('/courses/{course}', [CourseController::class, 'destroy'])
        ->name('admin.courses.destroy');
    
    // Certification Approvals
    Route::get('/certifications', [CertificationApprovalController::class, 'index'])
        ->name('admin.certifications');

    Route::get('/certifications/create', [CertificationApprovalController::class, 'create'])
        ->name('admin.certifications.create');

    Route::post('/certifications', [CertificationApprovalController::class, 'store'])
        ->name('admin.certifications.store');

    Route::get('/certifications/{certification}/edit', [CertificationApprovalController::class, 'edit'])
        ->name('admin.certifications.edit');

    Route::put('/certifications/{certification}', [CertificationApprovalController::class, 'update'])
        ->name('admin.certifications.update');

    Route::delete('/certifications/{certification}', [CertificationApprovalController::class, 'destroy'])
        ->name('admin.certifications.destroy');

    Route::get('/certifications/{certification}', [CertificationApprovalController::class, 'show'])
        ->name('admin.certifications.show');

    // Logout

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('admin.logout');

});
