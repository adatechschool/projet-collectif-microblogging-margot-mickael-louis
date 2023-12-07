<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Post</title>
</head>
<body>

    <h1 class="text-3xl font-bold underline">Unique post</h1>
    <div>
        
        <p>{{ $post->image }}</p>
        <p>{{ $post->created_at }}</p>
        <p>{{ $post->description }}</p>
        <p>{{ $post->likes }}</p>
        <!-- Ajoutez d'autres champs du post que vous souhaitez afficher -->
        
    </div>
    </body>
</html>