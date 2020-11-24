<?php

return function (\Next\Http\Request $request, $content, array $params = []) {
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
