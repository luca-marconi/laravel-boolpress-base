<h1>Tutti gli articoli</h1>
    @foreach ($posts as $post)
        <p>{{$post->title}}</p>
        <p>{{$post->author}}</p>
        <p>{{$post->published}}</p>
    @endforeach
