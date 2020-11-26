<?php

$handler = function (\Next\Http\Request $request) {
    return 'This has route-based middleware.';
};

$middleware = function ($page) {
    return function (\Next\Http\Request $request) use ($page) {
        print 'I&apos;ve been applied.<br>';
        return $page($request, $params);
    };
};

return $middleware($handler);
