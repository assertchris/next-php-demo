<?php

$handler = function () {
    return 'This has route-based middleware.';
};

$middleware = function ($page) {
    return function () use ($page) {
        print 'I&apos;ve been applied.<br>';
        return $page();
    };
};

return $middleware($handler);
