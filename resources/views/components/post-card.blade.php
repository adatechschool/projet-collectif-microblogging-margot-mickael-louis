<article class="w-1/2 h-fit flex flex-col py-2 text-xs bg-white">
    <section class="p-2">
        <div class="flex justify-between h-fit w-full">
            <h3 class="font-semibold">{{ $userName }}</h3>
            <p class="italic">{{ $timeStamp }}</p>
        </div>
        <legend>{{ $postDesc }}</legend>
    </section>
    <section class="w-full h-fit"><img src={{ $imageUrl }} class="aspect-auto w-full" /></section>
    <div class="w-full hfit px-2">
        <section class="flex justify-between items-center gap-2 p-2">
            <i class="fa-regular fa-heart text-lg"></i>
            <p class="w-full">Ici les likes</p>
            <i class="fa-regular fa-comment text-lg"></i>
        </section>
        <section class="w- fit max-w-24 ">
            // forEach comment...
        </section>
    </div>
</article>
