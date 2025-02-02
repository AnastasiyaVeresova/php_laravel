<!DOCTYPE html>
<html>

<head>
    <title>Form Example</title>
</head>

<body>
    <form action="{{ route('post_form') }}" method="post" name="myname">
        @csrf
        <label>Name: </label>
        <input type="text" name="my_name" required><br>

        <label>Password: </label>
        <input type="password" name="password" required><br>

        <label>Age: </label>
        <input type="number" name="age" required><br>

        <label>Gender: </label>
        <label>Male</label>
        <input type="radio" name="gender" value="male" required>
        <label>Female</label>
        <input type="radio" name="gender" value="female"><br>

        <input type="submit" value="Send">
    </form>
</body>

</html>
