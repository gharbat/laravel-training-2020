@foreach($posts as $post)
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <a href="/view/{{$post->id}}">see more</a>
    <a href="/delete/{{$post->id}}">delete</a>
    <hr>
@endforeach
