@extends('master')
@section('titol')
    index
@stop
@section('header')
<div>
	<h1>Llistat de grups</h1>
</div>
@stop
@section('content')
 <ul>
 <form method="get" action="{{url('/group/{uuid}')}}">
                <div class="panel panel-default">

                    <!-- Default panel contents -->
                    <div class="panel-heading" align="center">Llistat de grups</div>
                    <table class="table" align="center">
                        <tr>
                            <th>NOM</th>
                            <th>Nom descripcio</th>
                            
                        </tr>

                   @foreach($array_grups as $grups)

                    <tbody>
                        <tr>
                            <td>{{$grups["name"]}}</td>
                            <td>{{$grups["description"]}}</td>
                            
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                </div>

    <div>
        <input type="submit" class="btn btn-success" value="Mostrar Companyies" /></a>
        
        <a href="{{url('/web/companyRegister.blade.php')}}">
        <input type="button" class="btn btn-success" value="Registrar" /></a>
        <!--el Onclick per tirar una pagina enrera-->
        <a href="{{url('/')}}">
        <button type="button" class="btn btn-default" >Cancelar</button></a>
        
    </div> 
    </form>
 </ul>

       
@stop
@section('footer')
    <h5>App Company</h5>
@stop