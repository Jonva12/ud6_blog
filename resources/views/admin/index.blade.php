@extends('layouts.admin')

@section('content')
<div class="container">
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Rol</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $u)
        <tr>
          <td>{{$u->name}}</td>
          <td>{{$u->rol}}</td>
          <td><a href="{{route('edit', $u->id)}}">Editar</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection