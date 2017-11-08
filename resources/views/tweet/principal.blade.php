@extends('Layout.app')

@section('body')
	<br><br>
	<div class="col-lg-18 ">
		<center><button type="button" class="btn btn-primary btn-lg btn-block" disabled="true">Tweets:)</button></center>
	</div>
	<br><br>	
	<div class="col-lg-6 col-lg-offset-3">
		<center> <a href="tweet/create" class="btn btn-primary">Nuevo Tweet</a> </center>
		<br><br>
	<div class="list-group col-lg-8">
	@foreach ($tweets as $tweet)
		<li class="list-group-item">
    		<a href="{{'/tweet/'.$tweet->id}}">{{$tweet->body}}</a>
    		<span class="pull-right">{{$tweet->created_at->diffForHumans()}}</span>
  		</li>		
	@endforeach
	
		@foreach ($tweets as $tweet)
		<li class="list-group-item">    		
    		<a href="{{'/tweet/'.$tweet->id}}">Editar</a>

  		</li>
		
	@endforeach
		
  	</div>
	</div>
@endsection