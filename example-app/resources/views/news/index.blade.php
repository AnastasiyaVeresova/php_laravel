<!DOCTYPE html>
<html>

<head>
    <title>Список новостей</title>
    <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
</head>

<body>
    <div class="container">
        <h1>Список новостей</h1>
        @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
        @endif
        <a href="{{ route('news.create') }}">Новости</a>
        <ul>
            @foreach($news as $item)
            @if(!$item->hidden)
            <li>
                <h2>{{ $item->title }}</h2>
                <p>{{ $item->body }}</p>
                <a href="{{ route('news.hide', $item->id) }}">Скрыть</a>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</body>

</html>
