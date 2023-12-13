<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/7a1b45f3d5.js" crossorigin="anonymous"></script>
    <title>Data</title>
</head>

@php
    $hideForm = false;
@endphp
<body class="bg-gray-100">
    <x-app-layout>
    <div class="mt-20 mb-20">
<body class="bg-sky-100">
    <main
        class="flex flex-col w-full m-auto sm:w-2/3 lg:w-1/2 h-full overflow-scroll items-center font-atkinson text-off-black gap-2">
        <x-create-post-section :hideForm="$hideForm" />
        @foreach ($posts as $post)
        @include('components.post-card',['post' => $post])
            <!-- Ajoutez d'autres champs du post que vous souhaitez afficher -->

            

        @endforeach

    </main>
    {{ $posts->links() }} <!-- Pour afficher la pagination -->
    </x-app-layout>
</body>

</html>
