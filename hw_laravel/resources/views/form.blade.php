<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Form</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <form action="{{ url('/store_form') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email"><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
