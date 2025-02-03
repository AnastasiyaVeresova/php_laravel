<!DOCTYPE html>
<html>

<head>
    <title>Создание новостей</title>
    <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
</head>

<body>
    <div class="container">
        <h1>Создать новость</h1>
        <form action="{{ route('news.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Заголовок:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="body">Новость:</label>
                <textarea id="body" name="body" required></textarea>
            </div>
            <button type="submit">Создать</button>
        </form>
    </div>
</body>

</html>
