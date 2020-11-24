<?php

return function() {
    $post = \App\Models\Post::find(request()->param('id'));

    return response()->for()
        ->json(fn() => response()->json($post->toArray()))
        ->default(fn() => $post->content);
};
