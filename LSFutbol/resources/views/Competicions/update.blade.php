@extends('LayoutCompeticions.mainlayout')
@section('title','Actualitza')
@section('cssimportados')
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@endsection
@section('content')
	<h1>Actualizar partido</h1>
	@foreach($listaCompeticions as $tarea)
	<p>{{$tarea->competicio}}</p>
	<form method="post" action="/Compe/update">
		@csrf
		<input type="text" class="btn btn-success" name="competicio" id="titulo" placeholder="Introduce un titulo para cambiarlo...">
		<button type="submit" class="btn btn-success">Update</button>
	</form>
	@endforeach
@endsection