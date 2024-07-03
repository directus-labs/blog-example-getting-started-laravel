<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
    <nav>
        @foreach($navigation as $item)
            <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
        @endforeach
    </nav>
    <h1>Blog Posts</h1>
    @foreach($posts as $post)
        <article>
            <h2><a href="{{ route('posts.show', $post['id']) }}">{{ $post['title'] }}</a></h2>
            <p>Posted on: {{ date('F j, Y', strtotime($post['date_created'])) }}</p>
        </article>
    @endforeach
</body>
</html>