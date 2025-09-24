<h1>Resultados</h1>

@foreach ($books as $book)
    <div style="margin-bottom: 20px;">
        <h2>{{ $book->title }}</h2>
        <p><strong>Autor:</strong> {{ $book->author }}</p>
        <p><strong>Publicado:</strong> {{ $book->published_at }}</p>
        @if ($book->cover_url)
            <img
                alt="Portada"
                src="{{ $book->cover_url }}"
            >
        @endif
        <p>{{ $book->description }}</p>
    </div>
@endforeach
