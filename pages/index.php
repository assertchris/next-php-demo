<?php

use App\Models\Post;
use Next\Session;

return function () {
    Session::start();
    Session::set('count', (int) Session::get('count', 0) + 1);

    $posts = Post::all();
    $items = '<li>' . $posts->map(fn($post) => $post->title)->join('</li><li>') . '</li>';
    $count = Session::get('count', 0);

    return "
        <h1 class='text-lg font-semibold'>Posts</h1>
        <ol>{$items}</ol>
        <small>{$count}</small>
    ";
};
