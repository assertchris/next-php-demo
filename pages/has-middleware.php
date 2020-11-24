<?php

$handler = function (\Next\Http\Request $request, array $params = []) {
    return 'This has route-based middleware.';
};

$middleware = function($page) {
    return function (\Next\Http\Request $request, array $params = []) use ($page) {
        print 'I&apos;ve been applied.<br>';
        return $page($request, $params);
    };
};

return $middleware($handler);
