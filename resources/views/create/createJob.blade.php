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

    <form method="POST" action="/jobStore"  enctype="multipart/form-data">
<a href="{{route('jobIndex')}}"><i class="fa-solid fa-arrow-left"></i></a>
   @csrf
        @method('post')
        <div class="title">Create</div>
        <div> <input class="" type="text" name="title"  class ="form-control" placeholder="Title"></div>
        <div>  <input class="" type="text" name="description"  class ="form-control" placeholder="Description"></div>
        <div>  <input class="" type="text" name="banner_image"  class ="form-control" placeholder="Banner image"></div>
        <div> <textarea name="tinymce_body" id="" cols="30" rows="5" placeholder="tinymce_body"></textarea></div>
<div> <button type="submit" class=" py-2 px-4 rounded-lg " style="background-color: white">Submit</button></div>

  @foreach ($errors->all() as $error)
      <div style="color:whitesmoke">{{$error}}</div>
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
