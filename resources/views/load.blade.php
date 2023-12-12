@foreach ($posts as $post)
            <x-post-card :post="$post" />
            <!-- Ajoutez d'autres champs du post que vous souhaitez afficher -->
        @endforeach

        <div class="d-none">
            {{ $posts->links() }}
        </div>