<!DOCTYPE html>
@extends('master')
@section('titol')
    index
@stop
@section('header')

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

           



            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
@stop
@section('content')
<div class="container">
            <div class="content">
                <div class="title">Page not found.</div>
            </div>
        </div>   
@stop
@section('footer')
    <h5>App Company</h5>
@stop
