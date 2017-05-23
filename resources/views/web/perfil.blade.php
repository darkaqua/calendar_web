@extends('master')
@section('titol')
    index
@stop
@section('header')
<?php
    
     $nom = $array_perfil["name"];
    $userName = $array_perfil["username"];
    $telephone = $array_perfil["telephone"];
    $email = $array_perfil["email"]; ?>
@stop
@section('content')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Nom</label>
  <div class="col-10">
    <input class="form-control" type="text" value="<?php echo $nom;?>">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nom d'usuair</label>
  <div class="col-10">
    <input class="form-control" type="search" value="<?php echo $userName;?>">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email"  value="<?php echo $email;?>">
  </div>
</div>
  <div class="form-group row">
    <label for="example-password-input" class="col-2 col-form-label">Telèfon</label>
    <div class="col-10">
      <input class="form-control" type="tel" value="<?php echo $telephone;?>">
    </div>
</div>
</div>

@stop
@section('footer')
    <h5>App Company</h5>
@stop