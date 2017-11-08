@extends('Layout.app')

@section('body')
	<br><br>

	<div class="col-lg-18 ">
		@include('tweet.parciales.errores')
		<center><button type="button" class="btn btn-primary btn-lg btn-block" disabled="true">Crear Nuevo Tweet</button></center>

	</div>
	<br><br>
	<form class="form-horizontal" action="/tweet" method="post">
	{{csrf_field()}}
  		<fieldset>
    		<center><legend>Inserta un mensaje</legend> </center>  
    		<div class="form-group col-lg-4">
      			<textarea class="form-control col-lg-offset-12" name="body" id="exampleTextarea" rows="6"></textarea>
    		</div>
    		<br>
    		<center><a href="/tweet" class="btn btn-info">Regresar</a></center>
    		<br>
    		<center><button type="submit" class="btn btn-success">Aceptar </button></center>
  		</fieldset>
	</form>

@endsection