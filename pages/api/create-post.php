<?php

use App\Models\Post;
use Next\Http\Request;
use Next\Http\Response;

return function (Request $request, Response $response, array $params = []) {
    $validation = app('validation')->run($request, [
        'title' => 'required',
        'content' => 'required',
    ]);

    if ($validation->fails()) {
        return $response->json([
            'status' => 'error',
            'errors' => $validation->errors()->firstOfAll(),
        ], 400);
    }

    $post = Post::create($request->only('title', 'content'));

    app('log')->info("created post {$post->id}");

    return $response->json([
        'status' => 'ok',
        'data' => $post->toArray(),
    ]);
};
