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

<body class="bg-gray-100">
    <x-app-layout>
    <div class="mt-20 mb-20">
        <form action={{ route('create') }} method="POST">
            @csrf
            <label for="image">
                Lien de l'image:
                <input type="text" id="image" name="image" />
            </label>
            <label for="description">
                Légende:
                <input type="text" id="description" name="description" />
            </label>
            <button type="submit">Envoyer</button>
        </form>
    </div>
    <main class="flex flex-col w-full h-full overflow-scroll items-center font-atkinson gap-2">
        @foreach ($posts as $post)
        @include('components.post-card',['post' => $post])
            <!-- Ajoutez d'autres champs du post que vous souhaitez afficher -->

            

        @endforeach

        {{ $posts->links() }} <!-- Pour afficher la pagination -->
    </main>
</x-app-layout>
</body>

</html>
