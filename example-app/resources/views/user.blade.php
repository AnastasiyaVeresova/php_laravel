<!DOCTYPE html>
<html lang="en">

<head>
    <title>User information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }

        table,
        th,
        td {
            border: 1px solid #dee2e6;
        }

        th,
        td {
            padding: 0.75rem;
            text-align: left;
        }

        th {
            background-color: #f1f3f5;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #ffffff;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: #007bff;
            border: 1px solid #007bff;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn:hover {
            color: #ffffff;
            background-color: #0056b3;
            border-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body @if($user['id']==0) style="background-color: yellow" @endif>
    <table border="4">
        <tr>
            <td>Username: </td>
            <td>{{ $user['username'] }}</td>
        </tr>
        <tr>
            <td>First name: </td>
            <td>{{ $user['first_name'] }}</td>
        </tr>

        <tr>
            <td>Last name: </td>
            <td>{{ $user['last_name'] }}</td>
        </tr>

        <tr>
            <td>List of books: </td>
            <td>
                @foreach($user['list_of_books'] as $item)
                {{ $item }} <br>
                @endforeach
            </td>
        </tr>

    </table>
    <p>Debug: User ID is {{ $user['id'] }}</p>
    <p>Debug: User Data is {{ json_encode($user) }}</p>
</body>

</html>
