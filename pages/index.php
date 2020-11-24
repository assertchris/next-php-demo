<?php

use App\Models\Post;
use Next\Cache;
use Next\Http\Request;
use Next\Http\Response;
use Next\Session;

return function (Request $request, Response $response, array $params = []) {
    $session = app(Session::class);
    $session->set('count', (int) $session->get('count', 0) + 1);

    $posts = app(Cache::class)->remember('posts', fn() => Post::all(), 5);

    $items = '<li>' . $posts->map(fn($post) => $post->title)->join('</li><li>') . '</li>';
    $count = $session->get('count', 0);

    return "
        <h1 class='text-lg font-semibold'>Posts</h1>
        <ol>{$items}</ol>
        <small>{$count}</small>
    ";
};
