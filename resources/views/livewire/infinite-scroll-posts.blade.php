<div>
    @foreach ($posts as $post)
        <x-post-card :post="$post" />
    @endforeach

    {{ $posts->links() }}
</div>

@livewireScripts

<script>
    document.addEventListener('livewire:load', function () {
        window.onscroll = function(ev) {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                @this.call('loadMore');
            }
        };
    });
</script>
