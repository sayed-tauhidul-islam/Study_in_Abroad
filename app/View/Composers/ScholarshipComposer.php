<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Scholarship;

class ScholarshipComposer
{
    public function compose(View $view): void
    {
        $scholarships = Scholarship::with('university')
            ->limit(10)
            ->get();

        $view->with('navbarScholarships', $scholarships);
    }
}
