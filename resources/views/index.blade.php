<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/7a1b45f3d5.js" crossorigin="anonymous"></script>
    <title>Posts</title>
</head>

@php
    $hideForm = false;
@endphp
    <x-app-layout>
        <div
            class="flex flex-col w-full m-auto sm:w-2/3 lg:w-1/2 h-full items-center  text-off-black gap-2">
            <x-create-post-section :hideForm="$hideForm" />
            @foreach ($posts->sortByDesc('created_at') as $post)
                <x-post-card :post="$post" />
                <!-- Ajoutez d'autres champs du post que vous souhaitez afficher -->
            @endforeach

            {{ $posts->links() }} <!-- Pour afficher la pagination -->
        </div>
    </x-app-layout>
</html>
