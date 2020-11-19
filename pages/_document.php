<?php

use Next\Http\Request;
use Next\Http\Response;

return function(Request $request, Response $response, $content) {
    return "
        <!doctype html>
        <html lang='en'>
            <head>
                <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet'>
            </head>
            <body>
                {$content}
            </body>
        </html>
    ";
};
