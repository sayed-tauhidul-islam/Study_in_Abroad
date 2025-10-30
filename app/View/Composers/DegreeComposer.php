<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Degree;

class DegreeComposer
{
    public function compose(View $view): void
    {
        $degrees = Degree::limit(10)->get();

        $view->with('navbarDegrees', $degrees);
    }
}
