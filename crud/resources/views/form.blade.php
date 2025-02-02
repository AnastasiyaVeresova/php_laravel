<!DOCTYPE html>
<html>

<head>
    <title>User Form</title>
</head>

<body>
    <form action="{{ url('/store-user') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
