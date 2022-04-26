<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                @foreach ($links as $link)
                    <li><a href="{{ route('navbar') }}">{{ $link }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
    <h1>Hello World</h1>
    <ul>
        @foreach ($vegetables as $vegetable)
            <li>
                {{ $vegetable['name'] }}
                <ul>
                    @foreach ($vegetable['colors'] as $color)
                        <li>{{ $color }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
