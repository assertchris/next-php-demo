<?php

return function (\Next\Logging $logging) {
    return request()
        ->when()
        ->post(function () use ($logging) {
            $validation = request()->validate([
                'title' => 'required',
                'content' => 'required',
            ]);

            if ($validation->fails()) {
                return response()->json(
                    [
                        'status' => 'error',
                        'errors' => $validation->errors()->firstOfAll(),
                    ],
                    400
                );
            }

            $post = \App\Models\Post::create(request()->only('title', 'content'));

            $logging->info("created post {$post->id}");

            return response()
                ->for()
                ->html(fn() => $post->content)
                ->default(
                    fn() => response()->json([
                        'status' => 'ok',
                        'data' => $post->toArray(),
                    ])
                );
        });
};
