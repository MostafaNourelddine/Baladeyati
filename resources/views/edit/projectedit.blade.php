<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    @vite('resources/css/app.css')

</head>
<body>


    <form method="post" action="{{route('projectUpdate',["project"=>$project])}}"  enctype="multipart/form-data">
@method("post")
        <a href="{{route('projectIndex')}}"><i class="fa-solid fa-arrow-left"></i></a>
   @csrf
        @method('post')
        <div class="title">Edit</div>
        <div> <input class="" type="text" name="title"  class ="form-control" placeholder="Title" value="{{$project->title}}"></div>
        <div>  <input class="" type="text" name="summary"  class ="form-control" placeholder="Summary" value="{{$project->summary}}"></div>
        <div>  <input class="" type="text" name="banner_image"  class ="form-control" placeholder="Banner Image" value="{{$project->banner_image}}"></div>
        <div>  <input class="" type="date" name="date"  class ="form-control" placeholder="date" value="{{$project->date}}"></div>
        <div>  <input class="" type="date" name="end_date"  class ="form-control" placeholder="end date" value="{{$project->end_date}}"></div>
        <div> <textarea name="tinymce_body" id="" cols="30" rows="5" placeholder="tinymce_body" value="">{{$project->tinymce_body}}</textarea></div>
<div class="mt-16 cursor-pointer"> <button type="submit" class="mt-18 py-2 px-4 bg-color-white">Confirm</button></div>
  @foreach ($errors->all() as $error)
      <div style="color:white">{{$error}}</div>
  @endforeach
</form>
<style>
      form{
          position:absolute;
          left:50%;
          top:50%;
          transform:translate(-50%,-50%);
      }
      input{
          width:240px;
      }
      input,textarea{
          margin-top:20px;
          padding:5px;
      }
      button{
margin-top:25px;
padding:5px;
background-color: white;
text-decoration: none;
border:none;
cursor: pointer;
      }
      form{
          background-color: black;
          padding:40px;
          border-radius:10px;
          background-color: black;
          box-shadow:10px 8px 10px rgba(0,0,0,.3);
      }
.title{
    color:white;
    margin-bottom:10px;
    text-align: center;
    font-size: 26px;
    font-weight: bold
}
i{
    color:white;
    position: absolute;
    top: 20px;
    left: 20px;
}
  </style>


</body>
</html>
