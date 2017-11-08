@extends('todo.create')

@section('editId',$item->id)

@section('editBody',$item->body)

@section('editMethod')
  {{method_field('PUT')}}
@endsection