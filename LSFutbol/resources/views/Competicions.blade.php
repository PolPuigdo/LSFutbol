@extends('LayoutCompeticions.mainlayout')
@section('title','competicions')
@section('cssimportados')
    <title>Competicions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
@endsection
@section('content')
    <h3>Competiciones</h3>
	<p>Que quieres hacer? </p>
	<form method="get" action="/compe">
		<button type="submit" class="btn btn-success" name="champions" value="Champ">Champions</button>
	</form>
	<form method="get" action="/compe">
		<button type="submit" class="btn btn-success" name="lliga" value="Lliga">Liga</button>
	</form>
	<form method="get" action="/compe">
		<button type="submit" class="btn btn-success" name="copadelrei" value="Copa del Rei">Copa del Rey</button>
	</form>
	<form method="get" action="/create">
		<input type="submit" class="btn btn-success" id="create" name="create" value="Create" style="margin-right:10px">
	</form>
	<form method="get" action="/Compe/delete">
		<input type="submit" class="btn btn-success" id="delete" name="delete" value="Delete" style="margin-right:10px">
	</form>
	<form method="get" action="/Compe/update">
		<input type="submit" class="btn btn-success" id="update" name="update" value="Update" style="margin-right:10px">
	</form>
@endsection
