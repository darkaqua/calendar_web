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

        </ul>
@stop
@section('footer')
    <h5>App Company</h5>
@stop