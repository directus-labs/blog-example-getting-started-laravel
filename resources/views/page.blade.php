<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page['title'] }}</title>
</head>
<body>
    <nav>
        @foreach($navigation as $item)
            <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
        @endforeach
    </nav>
    <h1>{{ $page['title'] }}</h1>
    {!! $page['content'] !!}
</body>
</html>