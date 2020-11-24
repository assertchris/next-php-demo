<?php

return function (\Next\Http\Request $request, array $params = []) {
    $post = \App\Models\Post::find($params['id']);

    return response()->for()
        ->json(fn() => response()->json($post->toArray()))
        ->default(fn() => $post->content);
};
