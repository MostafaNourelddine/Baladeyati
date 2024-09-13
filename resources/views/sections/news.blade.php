@extends('layout')
@section('content')
@section('button') <a href="/create" class="bg-color-brown" style="    position: absolute;
right: 20px;

padding: 6px;
padding-left: 15px;
top: 15px;
border-radius: 10px;
padding-right: 15px;"> Create</a> @endsection
@section('header') News @endsection
@section('topic')
<form action="{{route('searchNews')}}" method="get" class="mb-16 mt-4 ">
    @method('get')
<input type="text" name="search" style="
border: 2px solid black;">
<button>Search</button>

</form>


@endsection
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg hidden sm:block">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 "style="font-size:16px;">
                    #ID
                </th>
                <th scope="col" class="px-6 py-3"style="font-size:16px;">
                    Title
                </th>
                <th scope="col" class="px-6 py-3"style="font-size:16px;">
                    Summary
                </th>
                <th scope="col" class="px-6 py-3"style="font-size:16px;">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $new)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$new->id}}
                </th>
                <td class="px-6 py-4">
                    {{$new->title}}
                </td>
                <td class="px-6 py-4">
                    {{$new->summary}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{Route('new',['new'=>$new])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-solid fa-angles-right"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="block sm:hidden">
    @foreach ($news as $new)
    <div class="grid grid-cols-2 grid-flow-col" style="max-width:300px;">
        <div class="flex-column">
            <p class="font-bold pb-1">
                #ID
            </p>
            <p class="font-bold pb-1">
                Title
            </p>
            <p class="font-bold pb-1">
                Summary
            </p>
            <p class="font-bold pb-1">
Action
            </p>
        </div>
        <div class="flex-column">
            <p class="pb-1">
                {{$new->id}}
            </p>
            <p class="pb-1">
                {{$new->title}}
            </p>
            <p class="pb-1">
                {{$new->summary}}
            </p>
            <p class="pb-1">
                <a href="{{Route('new',['new'=>$new])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-solid fa-angles-right"></i></a>
            </p>
        </div>
    </div>
    <hr/>
    @endforeach
</div>
<div class="mt-4 mx-60">{{$news->links()}}</div>
<style>


td {
    border-spacing: 20px;
  border-bottom: 1px solid rgb(7, 7, 7);
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

  </style>
@endsection
