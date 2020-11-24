<?php

use Next\Http\Request;
use Next\Http\Response;

$handler = function (Request $request, Response $response, array $params = []) {
    return 'This has route-based middleware.';
};

$middleware = function($page) {
    return function (Request $request, Response $response, array $params = []) use ($page) {
        print 'I&apos;ve been applied.<br>';

        return $page($request, $response, $params);
    };
};

return $middleware($handler);
