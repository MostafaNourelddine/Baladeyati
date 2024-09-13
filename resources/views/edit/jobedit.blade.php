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


    <form method="post" action="{{route('jobUpdate',["job"=>$job])}}"  enctype="multipart/form-data">
@method("post")
        <a href="/getdata"><i class="fa-solid fa-arrow-left"></i></a>
   @csrf
        @method('post')
        <div class="title">Edit</div>
        <div> <input class="" type="text" name="title"  class ="form-control" placeholder="Title" value="{{$job->title}}"></div>
        <div>  <input class="" type="text" name="description"  class ="form-control" placeholder="description" value="{{$job->description}}"></div>
        <div>  <input class="" type="text" name="banner_image"  class ="form-control" placeholder="Banner image" value="{{$job->banner_image}}"></div>
        <div> <textarea name="tinymce_body" id="" cols="30" rows="5" placeholder="tinymce_body" value="">{{$job->tinymce_body}}</textarea></div>
<div class="mt-16 cursor-pointer"> <button type="submit" class="mt-18 py-2 px-4 bg-color-white">Confirm</button></div>
  @foreach ($errors->all() as $error)
      <div>{{$error}}</div>
  @endforeach
</form>
<style>
      form{
          position:absolute;
          left:50%;
          top:45%;
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
