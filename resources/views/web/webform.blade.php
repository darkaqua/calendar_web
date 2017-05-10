@extends('master')
@section('titol')
  Explicacio
@stop
@section('header')
    <div class="panel panel-success">
        <div class="panel-heading"><h3>Dades de la web</h3></div>
        <div class="panel-body">
        </div>
    </div>
    
@stop
@section('content')
<div class="panel-heading">
<li class="list-group-item list-group-item-success ">
        <h4> <a href="{{route('webs.show', $web->id)}}"> Id web: {{$web->id}}</a></h4>
    </li>
    <div>
        <div class="panel-heading allargada"> Nom: {{$web->nom}}</div>
        <div class="panel-heading"><a href="{{$web->url}}"> Url: {{$web->url}}</a></div>
        <div class="panel-heading">Descripcio: {{$web->descripcio}}</div>   
    </div>
</div>
<button type="button" class="btn btn-danger" onClick='history.go(-1);'> Back</button>           
@stop
@section('footer')
<h3>App development</h3>
@stop