<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Review;

class ReviewComposer
{
    public function compose(View $view): void
    {
        $reviews = Review::with('university')
            ->limit(10)
            ->get();

        $view->with('navbarReviews', $reviews);
    }
}
