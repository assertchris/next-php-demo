<?php

use App\Models\Post;
use Next\Http\Request;
use Next\Http\Response;
use Next\Validation\Manager;

return function (Request $request, Response $response) {
    $validation = Manager::validate($request, [
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

    return $response->json([
        'status' => 'ok',
        'data' => $post->toArray(),
    ]);
};
