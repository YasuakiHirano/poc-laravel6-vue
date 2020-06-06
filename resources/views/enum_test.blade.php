<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>EnumTest</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        {{ App\Enums\Gender::male }}<br>
        {{ App\Enums\Gender::getDescription(1) }}
    </body>
</html>
