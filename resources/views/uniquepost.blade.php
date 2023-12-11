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
  <x-app-layout>

    <h1 class="text-3xl font-bold underline mt-16">Unique post</h1>
    <div>
        
        <p>User : {{ $post->user->name }}</p>
        <p>Image link : {{ $post->image }}</p>
        <p>Created : {{ $post->created_at }}</p>
        <p>Description : {{ $post->description }}</p>
        <p>Likes : {{ $post->likes }}</p>
        <!-- Ajoutez d'autres champs du post que vous souhaitez afficher -->
        
    </div>

    <div class="p-10 flex justify-center">  
        <!--Card 1-->
        <article class="w-1/2 h-fit flex flex-col py-2 text-xs bg-white lg:text-base xl:text-lg">
          <section class="p-2">
              <div class="flex justify-between h-fit w-full">
                  <h3 class="font-semibold">{{ $post->user->name }}</h3>
                  <p class="italic">{{ $post->created_at }}</p>
              </div>
              <legend>{{ $post->description }}</legend>
          </section>
          <section class="w-full h-fit"><a href="http://localhost:8070/posts/{{$post->id}}"><img src={{ $post->image }} class="aspect-auto w-full" /></a></section>
          <div class="w-full hfit px-2">
              <section class="flex justify-between items-center gap-2 p-2">
                  <i class="fa-regular fa-heart text-lg lg:text-xl xl:text-2xl hover:text-red-500"></i>
                  <p class="w-full italic"><b>{{ $post->likes }}</b> personnes aiment</p>
                  <i class="fa-regular fa-comment text-lg lg:text-xl xl:text-2xl hover:text-blue-500"></i>
              </section>
              <section class="w- fit max-w-24 ">
                  // forEach comment...
                  <button aria-label="display all comments" class="w-full italic text-gray-600 text-right hover:text-gray-800">Afficher tous les commentaires</button>
              </section>
          </div>
      </article>
      </div>
    </x-app-layout>
    </body>
</html>