<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebAmooz</title>

    </head>
    <body>
        <ul>
            @foreach (App\Post::all() as $post)
                <li>
                    <a href="{{ route('post.show', [$post->category->id, $post->id]) }}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </body>
</html>
