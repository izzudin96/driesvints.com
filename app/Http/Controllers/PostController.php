<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;

final class PostController
{
    public function __invoke(Post $post)
    {
        abort_if($post->isUnpublished(), 404);

        $previous = $post->previous();
        $next = $post->next();

        return view('post', compact('post', 'previous', 'next'));
    }
}
