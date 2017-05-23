@extends('master')
@section('titol')
    index
@stop
@section('header')

@stop
@section('content')
 <ul>
 <form method="get" action="{{url('/group/{uuid}')}}">
                <div class="panel panel-default">

                   
                    <?php $uuid=$uuid ?>

        
                    <!-- Default panel contents -->
                    <div class="panel-heading" align="center">Llistat de grups</div>
                    <table class="table" align="center">
                        <tr>
                            <th>NOM</th>
                            <th>Descripció</th>
                            <th>Events del grup</th>
                            <th>Usuaris del grup</th>
                            
                        </tr>

                   @foreach($array_grups as $grups)

                    <tbody>
                        <tr>
                            <td>{{$grups["name"]}}</td>
                            <td>{{$grups["description"]}}</td>
                            
                             <?php
                                     $id=$grups["id"];

                                ?>
                            
                            <td><a href="{{url('/groupEvents/'.$uuid.'/events/'.$id)}}">Mostrar events</a></td>
                            <td><a href="{{url('/usuarisGrups/'.$uuid.'/usuaris/'.$id)}}">Mostrar Usuaris</a></td> 
                          
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
        
                </div>

    <div>
        <input type="submit" class="btn btn-success" value="Mostrar Companyies" /></a>
        
         <input type="submit" class="btn btn-success" onClick='history.go(-1);' value="BACK" />
        
    </div> 
    </form>
 </ul>

       
@stop
@section('footer')
    <h5>App Company</h5>
@stop