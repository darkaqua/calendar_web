@extends('master')
@section('titol')
    index
@stop
@section('header')
    <div class="panel panel-success">
        <div class="panel-heading"><h3>Benvinguts a la Web List</h3></div>
        <div class="panel-body">
        </div>
    </div>
@stop
@section('content')

    @if(!$webs -> count())
        <div class="alert alert-danger" role="alert">No webs</div>
    @else

        <ul>
                <div class="panel panel-default">

                    <!-- Default panel contents -->
                    <div class="panel-heading" align="">Llistat de Webs</div>
                    <table class="table">
                        <tr>
                            <th>#ID</th>
                            <th>Nom</th>
                            <th>URL</th>
                            <th>Descripció</th>
                        </tr>

                    @foreach($webs as $web)
                    <tbody>
                        <tr>
                            <td><a href="{{route('webs.show', $web->id)}}" {{$web->id}}</td>
                            <td> {{$web->nom}}</td>
                            <td>  <a href="{{$web->url}}">{{$web->url}}</td>
                            <td>{{$web->descripcio}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                </div>

        </ul>
    @endif

    <a href="{{ url('add')}}">
        <button type="button" class="btn btn-success">Creatre Webs</button>
    </a>
    <button type="button" class="btn btn-danger" onClick='history.go(-1);'> Back</button>


@stop
@section('footer')
    <h5>App Company</h5>
@stop



