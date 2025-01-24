<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Books list</title>
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

        .card {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            width: 100%;
            max-width: 600px;
            padding: 1.25rem;
        }

        .card-body {
            padding: 1.25rem;
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

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #ffffff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
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

<body>
    <div class="card">
        <div class="card-body">
            <table>
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $key => $book)
                    <tr>
                        <td>{{ $book }}</td>
                        <td><a href="{{ route('remove_book', $key) }}">REMOVE</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <form name="add-new-book" id="add-new-book" method="post" action="{{ route('save_book') }}">
                @csrf
                <div class="form-group">
                    <label for="book_name">Name</label>
                    <input type="text" id="book_name" name="book_name" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
