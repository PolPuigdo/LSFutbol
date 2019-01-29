@extends('LayoutCompeticions.mainlayout')
@section('title','Crear')
@section('cssimportados')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@endsection
@section('content')
    <h1>Crear</h1>
<div class="container row">
        </div>
        <div>
            <form action="/compe/create" method='GET'>
                <div class="col-md-9">
                    <input type="text" name='temporada' class='form-control' placeholder="temporada">
                    <input type="text" name='competicio' class='form-control' placeholder="competicio">
                    <input type="text" name='golslocal' class='form-control' placeholder="golslocal">
                    <input type="text" name='golsvisitant' class='form-control' placeholder="golsvisitant">
                    <input type="text" name='id_equip_local' class='form-control' placeholder="id equip local">
                    <input type="text" name='id_equip_visitant' class='form-control' placeholder="id equip visitant">
                </div>
                <div>
                    <br>
                    <input type="submit" class='btn btn-success' value='Añadir partido'>
                </div>
            </form>
            <form method="get" action="/">
        <button type="submit" class="btn btn-success">Volver</button>
    </form> 
</div>
@endsection