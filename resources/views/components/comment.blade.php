@if ($post->comments->count() > 0)
    @foreach ($post->comments as $comment)
        <div>
            <p><strong>Author:</strong> {{ $comment->author->name }}</p>
            <p><strong>Content:</strong> {{ $comment->content }}</p>
            <p><strong>Likes:</strong> {{ $comment->likes }}</p>
        </div>
        <hr>
    @endforeach
@else
    <p>Aucun commentaire disponible.</p>
@endif