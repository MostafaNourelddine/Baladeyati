@extends('layout')
@section('button') <a href="{{Route('contactEdit',['contact'=>$contact])}}" class="px-10 py-10">Edit</a> @endsection

@section('content')
<div class="text-center relative" style="top:-60px;">View contacts</div>
<div class=" mt-5 font-bold">{{$contact->name}}</div>
<div class="mx-10 mt-5">{{$contact->occupation}}</div>
<div class="mx-10 mt-5">{{$contact->phoneNumber}}</div>
<div class="mx-10 mt-5">{{$contact->email}}</div>
@endsection
