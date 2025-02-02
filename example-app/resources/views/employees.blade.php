<!DOCTYPE html>
<html>

<head>
    <title>Employee Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Employee Form</h2>
        <form action="{{ route('store_employees') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $employees->first_name ?? '' }}" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $employees->last_name ?? '' }}" required>
            </div>
            <div class="form-group">
                <label for="department">Departments</label>
                <input type="checkbox" name="department[]" value="HR" {{ $employees && in_array('HR', unserialize($employees->department ?? '[]')) ? 'checked' : '' }}> Human Resources
                <input type="checkbox" name="department[]" value="IT" {{ $employees && in_array('IT', unserialize($employees->department ?? '[]')) ? 'checked' : '' }}> Information Technology
                <input type="checkbox" name="department[]" value="Finance" {{ $employees && in_array('Finance', unserialize($employees->department ?? '[]')) ? 'checked' : '' }}> Finance
                <input type="checkbox" name="department[]" value="Marketing" {{ $employees && in_array('Marketing', unserialize($employees->department ?? '[]')) ? 'checked' : '' }}> Marketing
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
