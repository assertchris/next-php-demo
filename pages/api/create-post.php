<?php

return function() {
    return request()
        ->when()
        ->post(function() {
            $validation = request()->validate([
                'title' => 'required',
                'content' => 'required',
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validation->errors()->firstOfAll(),
                ], 400);
            }

            $post = \App\Models\Post::create(request()->only('title', 'content'));

            app(\Next\Logging::class)->info("created post {$post->id}");

            return response()->for()
                ->html(fn() => $post->content)
                ->default(fn() => response()->json([
                    'status' => 'ok',
                    'data' => $post->toArray(),
                ]));
        });
};
