<?php

use App\Models\Post;
use Next\Http\Request;
use Next\Http\Response;

return function (Request $request, Response $response, array $params = []) {
    $id = $params['id'];
    return "Post {$id}";
};
