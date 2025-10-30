<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\UniversityComposer;
use App\View\Composers\CountryComposer;
use App\View\Composers\CourseComposer;
use App\View\Composers\ScholarshipComposer;

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
        // Share data with navbar in app layout
        View::composer('layouts.app', [
            UniversityComposer::class,
            CountryComposer::class,
            CourseComposer::class,
            ScholarshipComposer::class,
        ]);
    }
}
