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
		  <th scope="col">#</th>
		  <th scope="col">Equipo #1</th>
		  <th scope="col">Goles Equipo #1</th>
		  <th scope="col">Equipo #2</th>
		  <th scope="col">Goles Equipo #2</th>
		  <th scope="col">Competición</th>
		  <th scope="col">Temporada</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		@foreach($listaCompeticions as $competicions)
			<th>{{$competicions->IDpartit}}</th>
			<th>{{$competicions->IDequip_local}}</th>
			<th>{{$competicions->golslocal}}</th>
			<th>{{$competicions->IDequip_visitant}}</th>
			<th>{{$competicions->golsvisitant}}</th>
			<th>{{$competicions->competicions}}</th>
			<th>{{$competicions->temporada}}</th>
		@endforeach
		</tr>
	  </tbody>
	</table>
	<form method="get" action="/">
		<button type="submit" class="btn btn-success">Volver</button>
	</form>
@endsection
