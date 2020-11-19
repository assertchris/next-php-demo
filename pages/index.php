<?php

use App\Models\Post;

return function () {
    $posts = Post::all();
    $items = '<li>' . $posts->map(fn($post) => $post->title)->join('</li><li>') . '</li>';

    return "
        <h1 class='text-lg font-semibold'>Posts</h1>
        <ol>{$items}</ol>
    ";
};
