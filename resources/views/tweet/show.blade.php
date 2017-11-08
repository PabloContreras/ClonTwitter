@extends('Layout.app')

@section('body')
	<br>
	<div class="col-lg-offset-4">
		<H1><span>{{$item->body}}</span></H1>
		<br> <br>
		<a href="/tweet" class="btn btn-info">Regresar</a>
	</div>
@endsection