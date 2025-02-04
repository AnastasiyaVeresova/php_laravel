<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Добавить новую книгу</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="add-book__form-wrapper">
            <form name="add-new-book" id="add-new-book" method="post" action="{{ route('index_store') }}">
                @csrf
                <div class="form-section">
                    <label for="title">Название</label>
                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" required>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-section">
                    <label for="author">Автор</label>
                    <input type="text" id="author" name="author" class="form-control @error('author') is-invalid @enderror" required>
                    @error('author')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-section">
                    <label for="genre">Выберите жанр</label>
                    <select name="genre" id="genre" class="form-control @error('genre') is-invalid @enderror">
                        <option value="fantasy">Фэнтези</option>
                        <option value="sci-fi">Научная фантастика</option>
                        <option value="mystery">Детектив</option>
                        <option value="drama">Драма</option>
                    </select>
                    @error('genre')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>

            @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
            @endif
        </div>
    </div>
</body>

</html>
