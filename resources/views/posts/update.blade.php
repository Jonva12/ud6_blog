@extends('layouts.app2')

@section('content')
<br>
<div class="container">
  <form method="POST" action="{{route('post.update', $post->id)}}">
    @csrf
    @method('PUT')
    Title: <input type="text" name="title" value="{{$post->title}}"><br>
    Excerpt: <input type="text" name="excerpt" value="{{$post->excerpt}}"><br>
    Body: <input type="text" name="body" value="{{$post->body}}"><br>
    Image: <input type="file" name="imagen" value="{{$post->imagen}}"><br>
    Category: <select name="category">
      @foreach($categorias as $c)
        @if($post->id === $c->id)
          <option selected value="{{$c->id}}">{{$c->name}}</option>
        @else
          <option value="{{$c->id}}">{{$c->name}}</option>
        @endif
      @endforeach
    </select><br>
    <button type="submit">Guardar Post</button>
  </form><br>
</div>
@endsection