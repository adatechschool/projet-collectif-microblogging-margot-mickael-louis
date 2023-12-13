<article class="p-6 text-base bg-white rounded-lg dark:bg-gray-100 border">
    <footer class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            <p class="inline-flex items-center mr-3 text-sm text-gray-900 font-semibold"><img
                    class="mr-2 w-6 h-6 rounded-full"
                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                    alt="authorName">{{ $author }}</p>
            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $created }}</p>
        </div>
        <section class="flex justify-between items-center gap-2">
            <i class="fa-regular fa-heart text-lg lg:text-xl xl:text-2xl hover:text-red-500"></i>
            <p class="w-full italic"><b>{{ $likes }}</b></p>
        </section>
    </footer>
    <p class="text-gray-700">{{ $content }}</p>
</article>