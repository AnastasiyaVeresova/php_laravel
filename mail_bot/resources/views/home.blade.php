<!DOCTYPE html>
<html>

<head>
    <title>Домашняя страница</title>
</head>

<body>
    <h1>Добро пожаловать на домашнюю страницу!</h1>

    <h2>Форма регистрации</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Подтвердите пароль:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>

</html>
