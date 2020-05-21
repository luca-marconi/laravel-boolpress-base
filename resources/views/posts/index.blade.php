<h1>Tutti gli articoli</h1>
    @foreach ($posts as $post)
        <p>{{$post->title}}</p>
        <p>{{$post->author}}</p>
        <p>{{$post->published}}</p>
        <td><a href="{{route('posts.edit', $post->id)}}">Modifica</a></td>
        <td>
            <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit">Elimina</button>
                </form>
        </td>
    @endforeach

{{--
    <h1>Solo gli articoli pubblicati</h1>
        @foreach ($postsPublished as $post)
            <p>{{$post->title}}</p>
            <p>{{$post->author}}</p>
            <p>{{$post->published}}</p>
        @endforeach --}}
