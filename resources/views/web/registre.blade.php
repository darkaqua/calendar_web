@extends('master')
@section('titol')
    index
@stop
@section('header')
@stop
@section('content')
<div class="form-group row">
<form method="post" action="{{url('/registreComplete')}}">
  <label for="example-text-input" class="col-2 col-form-label">Nom</label>
  <div class="col-10">
    <input class="form-control" type="text" name="name">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nom d'usuair</label>
  <div class="col-10">
    <input class="form-control" type="search" name="userName">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email"  name="email">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Repeteix Email</label>
  <div class="col-10">
    <input class="form-control" type="email" name="reEmail">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="password"  name="Password">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Repeteix Password</label>
  <div class="col-10">
    <input class="form-control" type="password" name="rePassword">
  </div>
  </div>
  <div class="form-group row">
    <label for="example-password-input" class="col-2 col-form-label">Telèfon</label>
    <div class="col-10">
      <input class="form-control" type="tel" name="telefon">
    </div>
  <div>
      <input type="submit"class="btn btn-success" value="Registrar" />
    <!--el Onclick per tirar una pagina enrera-->
      <button type="button" class="btn btn-default"  onClick='history.go(-1);'>Cancelar</button>
  </div>
</div>
</form>
</div>
@stop
@section('footer')
    <h5>App Company</h5>
@stop