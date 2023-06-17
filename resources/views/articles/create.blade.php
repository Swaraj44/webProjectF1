<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Article</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="article_title">Article Title:</label>
            <input type="text" name="article_title" id="article_title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="article">Article:</label>
            <textarea name="article" id="article" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Article</button>
    </form>


</body>
</html>