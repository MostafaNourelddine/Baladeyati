@extends('layout')
@section('header') About Us @endsection
@section('content')


@foreach ($about as $about1)
@section('button') <a href="{{Route('aboutEdit',['about'=>$about1])}}" class="bg-color-brown" style="    position: absolute;
    right: 20px;
    padding: 6px;
    padding-left: 15px;
    top: 15px;
    border-radius: 10px;
    padding-right: 15px;"> Edit</a> @endsection
<div style="margin-left:50px;margin-top:250px;">{{$about1->tinymce_body}}</div>
   @endforeach


<style>

  </style>
@endsection
