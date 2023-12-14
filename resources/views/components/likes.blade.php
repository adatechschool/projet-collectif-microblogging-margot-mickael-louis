<section class="flex justify-between items-center gap-2 p-2">
    <form action=" {{ route('posts.likes', post->id) }}" method="POST">
    <button type="submit" class="fa-regular fa-heart text-lg lg:text-xl xl:text-2xl hover:text-red-500"></button>
    <p class="w-full italic"><b>{{ $post->likes }}</b> pers aiment</p>
    <i class="fa-regular fa-comment text-lg lg:text-xl xl:text-2xl hover:text-blue-500"></i>
    </form>
</section>