<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Post;

class PostComposer
{
    public function compose(View $view): void
    {
        $posts = Post::limit(10)->get();

        $view->with('navbarPosts', $posts);
    }
}
