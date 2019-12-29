@extends('layouts.admin')

@section('content')
<br>
<table>
<tr>
  <th>Nombre</th>
  <th>Rol</th>
</tr>
  @foreach($users as $u)
  <tr>
    <td>{{$u->name}}</td>
    <td>{{$u->rol}}</td>
  </tr>
  @endforeach
</table>

  @endsection