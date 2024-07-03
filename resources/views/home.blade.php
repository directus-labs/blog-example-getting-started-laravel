<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings['site_title'] }}</title>
</head>
<body>
     <nav>
        @foreach($navigation as $item)
            @if(isset($item['url']) && isset($item['label']))
                <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
            @else
                <p>Invalid navigation item</p>
            @endif
        @endforeach
    </nav>

    <h1>{{ $settings['site_title'] }}</h1>
    <p>{{ $settings['site_description'] }}</p>
</body>
</html>
