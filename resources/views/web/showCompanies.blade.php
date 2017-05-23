@extends('master')
@section('titol')
    index
@stop
@section('header')


@stop
@section('content')
 <ul>
 <form method="get" action="{{url('/mostrarEvents')}}">
                <div class="panel panel-default">

                    <!-- Default panel contents -->
                    <div class="panel-heading" align="center">Llistat d'events</div>
                    <table class="table" align="center">
                        <tr>
                            <th>NOM</th>
                            <th>DESCRIPCIÓ</th>
                            <th>DATA</th>
                            <th>Mostrar Usuaris</th>
                        </tr>

                   @foreach($array_events as $events)

                    <tbody>
                        <tr>
                            <td>{{$events["title"]}}</td>
                            <td>{{$events["description"]}}</td>
                            <?php
                                $data=$events["datetime"];
                                $date=strtotime($data);
                                $dataMeuFormat=date('d-m-Y',$date);

                                $id=$events["group_id"];
                                $uuid = $events["company_uuid"];
                                $idEvent = $events["id"];

                                ?>
                            <td><?php echo $dataMeuFormat?></td>
                            <td><a href="{{url('/groupEvents/'.$uuid.'/events/'.$id.'/usuaris/'.$idEvent)}}">Mostrar Usuaris</a></td>
                      
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