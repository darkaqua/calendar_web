@extends('master')
@section('titol')
    index
@stop
@section('header')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
      background-size: cover;
      
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <!-- no se com fer que el slider es mogui sol-->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://cdn.discordapp.com/attachments/259760118990766081/311882854542082049/DSC_0019.JPG" alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="https://cdn.discordapp.com/attachments/259760118990766081/311882851559931904/DSC_0017.JPG" alt="Image">
        <div class="carousel-caption">
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

@stop
@section('content')

  
<div class="container text-center">    
  <h3>Calendar Web</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://cdn.discordapp.com/attachments/259760118990766081/311879725335445504/DSC_0019.JPG" class="img-responsive" style="width:100%" alt="Image">
      <p>El nostre projectet</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://cdn.discordapp.com/attachments/259760118990766081/311879717143838721/DSC_0018.JPG" class="img-responsive" style="width:100%" alt="Image">
      <p>El nostre projecte</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <button class="btn btn-lg" data-toggle="modal" data-target="#myModal"> Iniciar Sessió </button>
      </div>
  </div>
   <div class="col-sm-4">
      <div class="well">
      <a href="{{url('/web/registre.blade.php')}}">
        <button class="btn btn-lg"> Registrarte </button>
       </a>
      </div>
  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
        <form class="form-inline"  method="post" action="{{url('/login')}}" >
          <label class="sr-only" for="inlineFormInput">Usuari</label>
          <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="userName" placeholder="usuari">

          <label class="sr-only" for="inlineFormInputGroup">Password</label>
          <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <input  class="form-control" name="userPassword" placeholder="password"  type="password">
          </div>

          <div class="form-check mb-2 mr-sm-2 mb-sm-0">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Recordem
            </label>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
</div>

@stop
@section('footer')
    <h5>App Company</h5>
@stop