<section class="flex justify-between items-center gap-2 p-2">
    <i class="fa-regular fa-heart text-lg lg:text-xl xl:text-2xl hover:text-red-500"></i>
    <p class="w-full italic"><b>{{ $post->likes()->count() }}</b> personnes aiment</p>
    <i class="fa-regular fa-comment text-lg lg:text-xl xl:text-2xl hover:text-blue-500"></i>
</section>