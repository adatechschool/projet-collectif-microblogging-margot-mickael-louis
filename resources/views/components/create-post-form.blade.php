    <form action={{ route('create') }} method="POST"
        class="mt-4 flex collapse transition-all opacity-0 duration-500 flex-col gap-2 w-full h-fit text-xs lg:text-base xl:text-lg" id="create-post-form">
        @csrf
        <x-form-element labelText="Téleverser une image" inputId="file" inputType="file" />
        <hr />
        <x-form-element labelText="Ajouter un lien" inputId="image" inputType="text" />
        <hr />
        <x-form-element labelText="Légende" inputId="description" inputType="text" />
        <hr />
        <button type="submit" class="w-full h-fit border-2 border-off-black rounded-sm text-center hover:text-lime-500 hover:border-lime-500"><i class="fa-solid fa-plus"></i></button>
    </form>
