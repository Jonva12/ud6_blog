@extends('layouts.app2')

@section('content')
<br>
<div class="container">
  <form method="POST" action="{{route('post.store')}}">
    @csrf
    Title: <input type="text" name="title"><br>
    Excerpt: <input type="text" name="excerpt"><br>
    Body: <input type="text" name="body"><br>
    Image: <input type="file" name="imagen"><br>
    Category: <select name="category">
      @foreach($categorias as $c)
      <option value="{{$c->id}}">{{$c->id}}</option>
      @endforeach
    </select><br>
    <button type="submit">Crear Post</button>
  </form><br>
</div>
@endsection