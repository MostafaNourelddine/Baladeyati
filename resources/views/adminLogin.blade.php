<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
<div class=" flex  p-8 justify-center items-center min-h-screen ">

<form method="get" action="/check" class="py-10 px-10 rounded-lg "   style="background-color: black; box-shadow:10px 8px 10px rgba(0,0,0,.3)" >
    @csrf
    {{-- logo --}}
        <div class="flex justify-center ">
            <img class="w-20 h-8 mb-24  "  src="https://th.bing.com/th/id/R.fa598099e439f29d959fbefe61fd328d?rik=0hwCG8BU%2bHjnPQ&pid=ImgRaw&r=0" alt="">
        </div>

{{-- input --}}
<div >
    <input name="email" class="pl-3 py-1 focus:outline-none text-xl rounded-lg " type="email" placeholder="Email">
</div>
<div >
    <input name="password" class="pl-3 py-1 text-xl mt-8 rounded-lg focus:outline-none " type="password" placeholder="Password">
</div>

{{-- submit --}}
<div class="flex justify-center ">
    <button type="submit" class="mt-24 py-2 px-4 rounded-lg " style="background-color: white">Submit</button>
</div>

</form>

</div>
<div class="-mt-8 text-center">Lorem ipsum dolor sit amet consectetur</div>
</body>
</html>
