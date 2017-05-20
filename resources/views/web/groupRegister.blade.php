@extends('master')
@section('titol')
    index
@stop
@section('header')
<div>
	<h1>Registre el teu grup</h1>
</div>
@stop
@section('content')
<div class="form-group row">
<form method="post" action="{{url('/registreComplete')}}">
  <label for="example-text-input" class="col-2 col-form-label">Nom</label>
  <div class="col-10">
    <input class="form-control" type="text" name="groupName">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Descripció</label>
  <div class="col-10">
    <input class="form-control" type="search" name="descripcio">
  </div>
</div>
 <div>
      <input type="submit"class="btn btn-success" value="Registrar" />
    <!--el Onclick per tirar una pagina enrera-->
      <button type="button" class="btn btn-default"  onClick='history.go(-1);'>Cancelar</button>
  </div>
</form>
</div>
@stop
@section('footer')
    <h5>App Company</h5>
@stop