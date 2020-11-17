<?php

use Next\Http\Request;
use Next\Http\Response;

return function (Request $request, Response $response) {
    // create a post...

    $response->json([
        'status' => 'ok'
    ]);
};
