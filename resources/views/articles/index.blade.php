<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>Articles</h1>
    <ul>
        @foreach ($articles as $article)
            <li>
                <h2>{{ $article->article_title }}</h2>
                <p>{{ $article->article }}</p>
                <p>Author: {{ $article->user_name }} ({{ $article->email }})</p>
            </li>
        @endforeach
    </ul>

    
</body>
</html>