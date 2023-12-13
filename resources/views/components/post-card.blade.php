<article class="w-full h-fit flex flex-col py-2 text-xs bg-white lg:text-base xl:text-lg">
    <section class="p-2">
        <div class="flex justify-between h-fit w-full">
            <h3 class="font-semibold">{{ $author }}</h3>
            <p class="italic">{{ $createdAt }}</p>
        </div>
        <legend>{{ $description }}</legend>
    </section>
    <section class="w-full h-fit"><a href="/posts/{{ $id }}"><img src={{ $image }}
                class="aspect-auto w-full" /></a></section>
    <div class="w-full hfit px-2">
        <section class="flex justify-between items-center gap-2 p-2">
            <i class="fa-regular fa-heart text-lg lg:text-xl xl:text-2xl hover:text-red-500"></i>
            <p class="w-full italic"><b>{{ $likes }}</b> personnes aiment</p>
            <i class="fa-regular fa-comment text-lg lg:text-xl xl:text-2xl hover:text-blue-500"></i>
        </section>
        <section class="flex flex-col gap-2 w-full h-fit">
            @foreach ($comments as $comment)
                <x-comment :comment="$comment" />
            @endforeach
            <button aria-label="display all comments"
                class="w-full italic text-gray-600 text-right hover:text-gray-800">Afficher tous les
                commentaires</button>
        </section>
    </div>
</article>
