@extends('master')
@section('titol')
    index
@stop
@section('header')

@stop
@section('content')
 <ul>
                <div class="panel panel-default">

                    <!-- Default panel contents -->
                    <div class="panel-heading" align="center">Llistat de Companyies</div>
                    <table class="table" align="center">
                        <tr>
                            <th>NOM</th>
                            <th>DESCRIPCIÓ</th>
                        </tr>

                   
                    <tbody>
                        <tr>
                            <td>Patata Group</td>
                            <td>Patates calentes Desc</td>
                            
                        </tr>
                    </tbody>
                    
                    </table>
                </div>

        <div>
                <a href="{{url('/web/companyRegister.blade.php')}}">
                <input type="submit"class="btn btn-success" value="Registrar" /></a>
                <!--el Onclick per tirar una pagina enrera-->
                <a href="{{url('/')}}">
                <button type="button" class="btn btn-default" >Cancelar</button></a>
                
            </div> 
        </ul>
@stop
@section('footer')
    <h5>App Company</h5>
@stop