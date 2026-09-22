<?php

namespace App\Providers;
use App\Models\Course;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\CertificationApproval;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         View::composer('components.navbar', function ($view) {
            $courses = Course::orderBy('category')
                ->orderBy('title')
                ->get()
                ->groupBy('category');

            $view->with('trainingCourses', $courses);
        });

        View::composer('home', function ($view) {
            $certifications = CertificationApproval::where('is_active', true)
                ->orderBy('display_order')
                ->orderBy('name')
                ->get();

            $view->with('certifications', $certifications);
        });
    }
}
