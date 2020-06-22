<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>route test</title>
    </head>
    <body>
        <form method="post" action="{{route('shorturl.url.store')}}">
            @csrf
            <input type="text" size="40" name="url" />
            <button>submit</button>
        </form>
    </body>
</html>
