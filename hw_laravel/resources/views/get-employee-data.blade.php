<!DOCTYPE html>
<html>

<head>
    <title>Employee Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-primary {
            margin-top: 20px;
        }
    </style>
    <script>
        function saveToLocalStorage(key, value) {
            localStorage.setItem(key, JSON.stringify(value));
        }

        function getFromLocalStorage(key) {
            return JSON.parse(localStorage.getItem(key));
        }

        function updateLocalStorage(key, updatedData) {
            let existingData = getFromLocalStorage(key);
            if (existingData) {
                Object.assign(existingData, updatedData);
                saveToLocalStorage(key, existingData);
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('employee-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const formData = new FormData(form);
                const data = {};
                formData.forEach((value, key) => {
                    data[key] = value;
                });

                const id = form.dataset.id || Date.now(); // Генерируем уникальный ID, если его нет
                saveToLocalStorage(id, data);

                alert('Data saved to Local Storage!');
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h2>Employee Form</h2>
        <form name="employee-form" id="employee-form" method="post" action="{{ url('store-form') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" id="position" name="position" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" required="true">
            </div>
            <div class="form-group">
                <label for="workdata">WorkData</label>
                <textarea name="workdata" class="form-control" required="true"></textarea>
            </div>
            <div class="form-group">
                <label for="json_data">JSON Data</label>
                <textarea name="json_data" class="form-control" required="true"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
