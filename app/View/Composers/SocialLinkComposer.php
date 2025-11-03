<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\SocialLink;

class SocialLinkComposer
{
    public function compose(View $view): void
    {
        $socialLinks = SocialLink::where('is_active', true)
            ->orderBy('order')
            ->get();

        $view->with('socialLinks', $socialLinks);
    }
}
