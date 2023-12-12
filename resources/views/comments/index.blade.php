<!-- resources/views/comments/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
</head>
<body>
    <h1>Comments</h1>

    @foreach ($comments as $comment)
        <div>
            <p><strong>Author:</strong> {{ $comment->author->name }}</p>
            <p><strong>Post:</strong> {{ $comment->post->id }}</p>
            <p><strong>Content:</strong> {{ $comment->content }}</p>
            <p><strong>Likes:</strong> {{ $comment->likes }}</p>
        </div>
        <hr>
    @endforeach
</body>
</html>
