<section class="h-fit w-full bg-white flex flex-col text-xs lg:text-base xl:text-lg p-2">

    <div class="w-full h-fit flex justify-between items-center text-lg lg:text-xl xl:text-2xl">
        <h2 class="font-bold">Partagez une photo</h2>
        <button aria-label="open create new post form" onclick="toggleForm()"
            class="border-solid fill-off-black border-off-black border-2 hover:border-blue-500 hover:fill-blue-500 rounded-sm p-0.5 w-fit h-fit flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 lg:w-5  h-3 lg:h-5  fill-inherit"
                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path
                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
            </svg>
        </button>
    </div>


    <x-create-post-form />

</section>

<script>
    console.log("script")
    const form = document.getElementById("create-post-form")

    function toggleForm() {
        form.classList.toggle("collapse")
        form.classList.toggle("opacity-0")
        form.classList.toggle("opacity-100")
    }
</script>
