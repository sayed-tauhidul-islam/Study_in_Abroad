<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Course;

class CourseComposer
{
    public function compose(View $view): void
    {
        $courses = Course::with('university')
            ->limit(10)
            ->get();

        $view->with('navbarCourses', $courses);
    }
}
