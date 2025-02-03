<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logs</title>
    <style>
        td, th, tr {
            text-align: center;
        }
        table {
            position: absolute;
            border-spacing: 0;
            border-collapse: collapse;
            width: 70%;
            box-shadow: 0px 4px 10px rgb(255 255 255 / 25%);
        }
        td, th {
            padding: 10px;
            border: 1px solid #B2B2B2;
        }
        tr:nth-child(odd) {
            background-color: #C1B7B7;
        }
    </style>
</head>
<body>
    <div class='table'>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Time</th>
                    <th>Duration</th>
                    <th>IP</th>
                    <th>URL</th>
                    <th>Method</th>
                    <th>Input</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                    <tr>
                        <td>{{ $log->id }}</td>
                        <td>{{ $log->time }}</td>
                        <td>{{ $log->duration }}</td>
                        <td>{{ $log->ip }}</td>
                        <td>{{ $log->url }}</td>
                        <td>{{ $log->method }}</td>
                        <td>{{ $log->input }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
