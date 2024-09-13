@extends('layout')

@section('content')
@section('header') Dashboard  @endsection
@section('topic') General stats @endsection
    <div id="boxes" class="boxes mt-10 px-6">
{{-- @foreach ($counts as $count) --}}
<div class="box flex justify-between py-4 px-8 bg-color-brown rounded-lg">
    <p class="before">News</p>
    <p >{{$news_count}}</p>
</div>
<div class="box flex justify-between py-4 px-8 bg-color-brown rounded-lg">
    <p class="before">Jobs</p>
    <p >{{$jobs_count}}</p>
</div>
<div class="box flex justify-between py-4 px-8 bg-color-brown rounded-lg">
    <p class="before">Projects</p>
    <p>{{$projects_count}}</p>
</div>
<div class="box flex justify-between py-4 px-8 bg-color-brown rounded-lg">
    <p class="before">Contacts</p>
    <p>{{$contacts_count}}</p>
</div>
{{-- @endforeach --}}
    </div>
</div>
<style>
    #boxes{
  display: grid;
  grid-gap: 30px;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));

    }
    .before{
        position: relative;
    top: -5px;
    }
    .before::before{
        display: inline-block;
    content: "";
    width: 25px;
    height: 25px;
    border-radius: 50%;
    left: -9px;
    top: 7px;
    background-color: white;
    position: relative;
    }
</style>
@endsection
