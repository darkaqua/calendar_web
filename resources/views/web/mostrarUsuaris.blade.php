@extends('master')
@section('titol')
    index
@stop
@section('header')

@stop
@section('content')
 <ul>
 <form method="get" action="{{url('/user/{uuid}')}}">
                <div class="panel panel-default">


                    <!-- Default panel contents -->
                    <div class="panel-heading" align="center" >Llistat de usuaris</div>
                     
                    <table class="table" align="center">
                    
                        <tr>
                            <th>NOM</th>
                            <th>Nom d'usuari</th>
                            
                        </tr>

                   @foreach($array_usuaris as $usuaris)

                    <tbody>
                        <tr>
                            <td>{{$usuaris["name"]}}</td>
                            <td>{{$usuaris["username"]}}</td>
                            
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                </div>

    <div>
     <a href="{{url('/mostrarCompanyies')}}">
        <input type="button" class="btn btn-success" value="Mostrar Companyies" />
        </a>
        

        <!--el Onclick per tirar una pagina enrera-->

        <button type="button" class="btn btn-default"   onClick='history.go(-1);' >Cancelar</button>
        
    </div> 
    </form>
 </ul>

       
@stop
@section('footer')
    <h5>App Company</h5>
@stop