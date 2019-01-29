@extends('LayoutCompeticions.mainlayout')
@section('title','Champions')
@section('cssimportados')
    <title>Champions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
@endsection
@section('content')
    <h3>Competiciones:</h3>

	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">Id</th>
		  <th scope="col">Equipo #1</th>
		  <th scope="col">Goles Equipo #1</th>
		  <th scope="col">Equipo #2</th>
		  <th scope="col">Goles Equipo #2</th>
		  <th scope="col">Competición</th>
		  <th scope="col">Temporada</th>
		</tr>
	  </thead>
	  <tbody>
		@foreach($listaCompeticions as $competicions)
		<tr>
			<th>{{$competicions->IDpartit}}</th>
			<th>{{$competicions->IDequip_local}}</th>
			<th>{{$competicions->golslocal}}</th>
			<th>{{$competicions->IDequip_visitant}}</th>
			<th>{{$competicions->golsvisitant}}</th>
			<th>{{$competicions->competicio}}</th>
			<th>{{$competicions->temporada}}</th>
			</tr>
		@endforeach
		
	  </tbody>
	</table>
	<form method="get" action="/">
		<button type="submit" class="btn btn-success">Volver</button>
	</form>
@endsection
