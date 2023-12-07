<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
</head>
<body>

    <h1>Hello World</h1>
    <div>
        @foreach ($posts as $post)
            <p>{{ $post->image }}</p>
            <p>{{ $post->description }}</p>
            <p>{{ $post->likes }}</p>
            <!-- Ajoutez d'autres champs du post que vous souhaitez afficher -->
        @endforeach

        {{ $posts->links() }} <!-- Pour afficher la pagination -->
    </div>
    </body>
</html>