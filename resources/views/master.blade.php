<?php
    include ($_SERVER['DOCUMENT_ROOT']."/e203/app/http/routes.php");
?>

        <!DOCTYPE html>
<html>
    <head>
    <style>
       footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    </style>
        <title>@yield('titol')</title>
        <link href="{{URL::asset('css/menuNavBar.css')}}"  rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
   <div>
       <style>

                .fontSize{
                font-size: 15px;
        
            }
          
       </style>


<div class="row">
    <div class="col-md-1"></div>
            <div class="col-md-10">
            <nav class="  navbar-default navbar navbar-fixed-top">
                <div class="  container">
                    <div class="    collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="  fontSize  nav navbar-nav">
                            <li><a href="{{url('/')}}">Inici <span class="sr-only">(current)</span></a> </li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Perfil <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Usuari</a></li>
                                <li><a href="{{url('/web/companyRegister.blade.php')}}">Companyia</a></li>
                            </ul>
                            </li>
                                <!--
                            <li><a href="{{url('/web/test.blade.php')}}">Agenda</a></li>-->
                            <li><a href="{{url('/tarifa')}}">Tarifes</a></li>
                            <li><a href="{{url('/web/calendar.blade.php')}}">Calendari</a></li>
                            <li><a data-toggle="modal" data-target="#modalContacte">Contacte</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="page-header">
                    @yield('header')
                </div>
            </div>
            <div class="container">
                @yield('content')
            </div>
        </form>
        </div>
        </div>
            <footer>
                <div class="container">
                    @yield('footer')
                    <p>Dark Aqua</p>
                </div>
            </footer>
        </div>
</body>


            <div id="modalContacte" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <form class="form-horizontal" role="form" method="post" action="index.php">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Missatge</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="message"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="human" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary" onClick='history.go(-1);'>
                </div>
            </div>
                <div class="form-group">
                 <div class="col-sm-10 col-sm-offset-2">
                </div>
            </div>
        </div>
 </div>   
</html>