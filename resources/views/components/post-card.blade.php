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
            <form method="POST" action="{{ route('like') }}">
                @csrf
            <input type="hidden" name="likeable_type" value="{{ get_class($post) }}"/>
            <input type="hidden" name="id" value="{{ $post->id }}"/>

            <button type="submit">
            <i class="fa-regular fa-heart text-lg lg:text-xl xl:text-2xl hover:text-red-500"></i>
            </button>
        </form>
                <p class="w-full italic"><b>{{ $likes }}</b> personnes aiment</p>
            <i class="fa-regular fa-comment text-lg lg:text-xl xl:text-2xl hover:text-blue-500"></i>
        </section>
        <section>
            <!-- Formulaire pour ajouter un commentaire -->
            <form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data" 
            class="mt-4 flex flex-col gap-2 w-full h-fit text-xs lg:text-base xl:text-lg items-center">
            @csrf

            <input type="hidden" name="post_id" value="{{ $id }}">
            <textarea name="content" placeholder="Ajouter un commentaire" class="border border-gray-300 p-2 rounded-sm text-sm lg:text-base xl:text-lg w-full"></textarea>
            <button type="submit" class="border-none shadow-gray-500 shadow-sm box-border w-fit h-fit px-2 py-1 rounded-sm text-sm lg:text-base xl:text-lg self-end">Publier</button>
            </form>
        </section>
        <section class="flex flex-col gap-2 w-full h-fit">
            @foreach ($comments->sortByDesc('created_at') as $comment)
                <x-comment :comment="$comment" />
            @endforeach
            <button aria-label="display all comments"
                class="w-full italic text-gray-600 text-right hover:text-gray-800">Afficher tous les
                commentaires</button>
        </section>
    </div>
</article>
