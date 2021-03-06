@extends('master')
@section('titol')
    index
@stop
@section('header')

@stop
@section('content')
 <ul>
 <form method="get" action="{{url('/mostrarCompanyies')}}">
                <div class="panel panel-default">

                    <!-- Default panel contents -->
                    <div class="panel-heading" align="center">Llistat de companyies</div>
                    <table class="table" align="center">
                        <tr>
                            <th>NOM</th>
                            <th>DESCRIPCIÓ</th>
                            
                        </tr>

                   @foreach($array_companyies as $companies)

                    <tbody>
                        <tr>
                            <td>{{$companies["name"]}}</td>
                            <td>{{$companies["description"]}}</td>
                            <?php
                                $uuid=$companies["uuid"];

                                ?>
                            <td><li><a href="{{url('/group/'.$uuid)}}">Mostrar Grups</a></li></td>

                             
                            <td><li><a href="{{url('/user/'.$uuid)}}">Mostrar usuaris</a></li></td>
                            
                        </tr>
                    </tbody>
                    
                    @endforeach
                    </table>
                </div>

    <div>
        <input type="submit" class="btn btn-success" value="Mostrar Companyies" /></a>
        <!--el Onclick per tirar una pagina enrera-->
        <button type="button" class="btn btn-default"   onClick='history.go(-1);' >Cancelar</button>
        
    </div> 
    </form>
 </ul>

       
@stop
@section('footer')
    <h5>App Company</h5>
@stop