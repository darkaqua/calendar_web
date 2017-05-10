@extends('master')
@section('titol')
    Explicacio
@stop
@section('header')
    <style xmlns="http://www.w3.org/1999/html">
        .colorFons{
             background-color: #ff753b;
        }
    </style>
@stop
@section('content')
    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2>Pagament</h2>
            <h4>Trïa el pagament que millor s'adeqüi a la seva necessitat</h4>
        </div>
        <div class="row slideanim">
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="  panel-heading text-center ">
                        <h1 class="">Basic</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>1</strong> Grup</p>
                        <p><strong>20</strong> Usuaris</p>
                        <p><strong>1</strong> Caledari</p>
                    </div>
                    <div class="panel-footer">
                        <h3>Free</h3> 
                        <a href="{{url('pagament')}}">
                            <button class="btn btn-lg"> Sign Up</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Pro</h1>
                    </div>
                    <div class="panel-body">
                       <p><strong>3</strong> Grups</p>
                        <p><strong>40</strong> Usuaris</p>
                        <p><strong>3</strong> Caledari</p>

                    </div>
                    <div class="panel-footer">
                        <h3>9,99€</h3>
                        <h4>Mensual</h4>
                        <a href="{{url('pagament')}}">
                            <button class="btn btn-lg"> Sign Up</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Premium</h1>
                    </div>
                    <div class="panel-body">          
                    
                          <p><strong>ilimitats</strong> Grups</p>
                        <p><strong>ilimitats</strong> Usuaris</p>
                        <p><strong>ilimitats</strong> Caledari</p>

                    </div>
                    <div class="panel-footer">
                        <h3>19,99€</h3>
                        <h4>Mensual</h4>
                        <a href="{{url('pagament')}}">
                            <button class="btn btn-lg"> Sign Up</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop
@section('footer')
    <h3>App development</h3>
@stop