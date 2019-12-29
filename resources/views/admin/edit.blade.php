@extends('layouts.admin')

@section('content')
<div class="container"><br>
	<h2>Nombre del usuario para editar rol:</h2>
	<h3>{{$user->name}}</h3><br>
	    <form action="{{route('update', $user->id)}}" method="post">
	      @method('PUT')
	      @csrf
	        <select name="rol">
	        	@foreach($rol as $r)
	        		@if($r->name === $user->rol)
	        			<option selected value="{{$r->name}}">{{$r->name}}</option>
	            	@else
	            		<option value="{{$r->name}}">{{$r->name}}</option>
	            	@endif
	            @endforeach
	        </select>
	        <button type="submit">Gudardar</button>
	    </form>
</div>
@endsection