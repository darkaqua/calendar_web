@extends('master')
@section('titol')
    index
@stop
@section('header')
@stop
@section('content')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Nom</label>
  <div class="col-10">
    <input class="form-control" type="text" id="name">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Cognoms</label>
  <div class="col-10">
    <input class="form-control" type="search" id="surnamet">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email"  id="email">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">Repeteix Email</label>
  <div class="col-10">
    <input class="form-control" type="url" id="reEmail">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="tel"  id="Passwprd">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Repeteix Password</label>
  <div class="col-10">
    <input class="form-control" type="password" id="rePassword">
  </div>
  <div>
    <a href="{{url('/')}}">
        <button type="button" class="btn btn-success">Registrar-se</button>
    </a>
    <!--el Onclick per tirar una pagina enrera-->
      <button type="button" class="btn btn-default"  onClick='history.go(-1);'>Cancelar</button>
  </div>
</div>
</div>
@stop
@section('footer')
    <h5>App Company</h5>
@stop