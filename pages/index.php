<?php

return function() {
    $posts = app(\Next\Cache::class)->remember('posts', fn() => \App\Models\Post::all(), 5);
    $items = '<li>' . $posts->map(fn($post) => $post->title)->join('</li><li>') . '</li>';

    return "
        <h1 class='text-lg font-semibold'>Posts</h1>
        <ol>{$items}</ol>
    ";
};
