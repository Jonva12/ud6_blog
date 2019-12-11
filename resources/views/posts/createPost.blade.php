@extends('layouts.app2')

@section('content')
<br>
<div class="container">
  <form enctype="multipart/form-data" method="post" action="#">
    @csrf
    Title: <input type="text" name="title"><br>
    Excerpt: <input type="text" name="excerpt"><br>
    Body: <input type="text" name="body"><br>
    Image: <input type="file" name="imagen"><br>
    Category: <select name="categoria">
      <option>opcion1</option>
    </select><br>
    <button type="submit">Crear Post</button>
  </form><br>
</div>
@endsection