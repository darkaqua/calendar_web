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
                                <li><a href="{{url('/web/companyRegister.blade.php')}}">Companyia</a></li>
                                <li><a href="{{url('/web/groupRegister.blade.php')}}">Grup</a></li>
                            </ul>
                            </li>
                                <!--
                            <li><a href="{{url('/web/test.blade.php')}}">Agenda</a></li>-->
                            <li><a href="{{url('/tarifa')}}">Tarifes</a></li>
                            <li><a href="{{url('/mostrarCompanyies')}}">Companyies</a></li>
                           
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
 </div>   
</html>