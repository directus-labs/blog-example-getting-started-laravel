<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post['title'] }}</title>
</head>
<body>
    <nav>
        @foreach($navigation as $item)
            <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
        @endforeach
    </nav>
    <h1>{{ $post['title'] }}</h1>
    <p>Posted on: {{ date('F j, Y', strtotime($post['date_created'])) }}</p>
    {!! $post['content'] !!}
    <a href="{{ route('posts.index') }}">Back to Blog</a>
</body>
</html>