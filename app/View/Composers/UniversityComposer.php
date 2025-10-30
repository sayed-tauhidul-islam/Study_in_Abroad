<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\University;

class UniversityComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $universities = University::with('country')
            ->orderBy('ranking')
            ->limit(10)
            ->get();

        $view->with('navbarUniversities', $universities);
    }
}
