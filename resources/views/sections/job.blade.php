@extends('layout')
@section('button') <a href="{{Route('jobEdit',['job'=>$job])}}" class="px-10 py-10 bg-color-brown" style="    position: absolute;
    right: 20px;
    top: 15px;
    padding: 6px;
    padding-left: 15px;
    top: 15px;
    border-radius: 10px;
    padding-right: 15px;">Edit</a> @endsection

@section('content')
<div class="text-center relative" style="top:-60px;font-weight:bold;font-size:23px;">View Jobs</div>
<div class="" ><img src="{{$job->banner_image}}" style="width: 80%;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
        max-height: 200px;
        object-fit:cover;" alt=""></div>
<div class="text-center mt-5 ">{{$job->title}}</div>
<div class="mx-10 mt-5">{{$job->summary}}</div>
<div class="mx-10 mt-20">{{$job->tinymce_body}}</div>
@endsection

<style>

</style>

