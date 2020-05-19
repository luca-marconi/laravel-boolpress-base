
<h1>Solo gli articoli pubblicati</h1>
    @foreach ($postsPublished as $post)
        <p>{{$post->title}}</p>
        <p>{{$post->author}}</p>
        <p>{{$post->published}}</p>
    @endforeach
