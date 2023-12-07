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
        
        <p>User : {{ $post->user->name }}</p>
        <p>Image link : {{ $post->image }}</p>
        <p>Created : {{ $post->created_at }}</p>
        <p>Description : {{ $post->description }}</p>
        <p>Likes : {{ $post->likes }}</p>
        <!-- Ajoutez d'autres champs du post que vous souhaitez afficher -->
        
    </div>

    <div class="p-10">  
        <!--Card 1-->
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <div><p>PP {{ $post->user->name }}</p></div>
          <img class="w-full rounded" src="/images/lock.jpg" alt="Lock">
          <div class="px-6 py-4">
            <div class="text-sm text-gray-300 mb-2 flex justify-between">
                <div>{{ $post->created_at }}</div>
                <div>	&#x1F493;{{ $post->likes }}</div>
            </div>
            <p class="text-gray-700 text-base">
                {{ $post->description }}
            </p>
          </div>
          <div class="px-6 pt-4 pb-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
          </div>
        </div>
      </div>
    </body>
</html>