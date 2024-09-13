<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite('resources/css/app.css')

    <title>layout</title>

</head>
<body>
    <div id="menu" class="burgerMenu block md:hidden"><i class="fa-solid fa-bars" style="margin:8px;font-size:18px;"></i></div>
    <div class=" flex">
        <span id="bars"  class="bars" ><i class="fa-solid fa-bars"></i></span>
        <div id="sidebar" nam="hidden" class=" side-bar  bg-color-brown min-h-screen relative flex flex-col justify-between " >
            <div class="links">
                {{-- logo --}}
            <div class="flex justify-center ">
                <img class="w-28 h-12 mb-8 mt-4  "  src="https://th.bing.com/th/id/R.fa598099e439f29d959fbefe61fd328d?rik=0hwCG8BU%2bHjnPQ&pid=ImgRaw&r=0" alt="">
            </div>
                <ul class="bg-color-black">
                    <a  href="/getdata" ><li id="square"class="p-2 py-4  pr-16 pl-4 text-color-white hover:bg-color-red2">Dashboard</li></a>
                    <a  href="/news" ><li id="square"class="p-2 py-4  pr-16 pl-4 text-color-white hover:bg-color-red2">News</li></a>
                    <a  href="/jobs" ><li id="square"class="p-2 py-4  pr-16 pl-4 text-color-white hover:bg-color-red2">Jobs</li></a>
                    <a  href="/projects" ><li id="square"class="p-2 py-4  pr-16 pl-4 text-color-white hover:bg-color-red2">Projects</li></a>
                    <a  href="/contacts" ><li id="square"class="p-2 py-4  pr-16 pl-4 text-color-white hover:bg-color-red2">Address book</li></a>

                    <li  id="click" class="p-2 py-4  pr-16 pl-4 text-color-white hover:bg-color-red2 relative"><button id="square">Configuration</button><i class="fa-solid fa-angle-down absolute"></i></li>
                    {{-- hidden --}}
                    <a id="hidden" href="/aboutUs" ><li id="square"class="p-2 py-4  pr-16 pl-4 text-color-white hover:bg-color-red2">About us</li></a>
                </ul>
            </div>
            <div class="footer ">
                <ul class="pb-6 bg-color-black">
                    <a  href="/createemail" ><li id="square"class="p-2 py-4  pr-16 pl-4 text-color-white hover:bg-color-red2">Manage users</li></a>
                <form action="/logout">
                @csrf
                <button class="hover:bg-color-red2 w-full">
                <li id="square"class="p-2 py-4  pr-16 pl-4 text-color-white w-fit">Logout</li>
                </button>
                </form>
                </ul>

            </div>
         </div>
         <button class="  bg-color-brown"
>@yield('button')</button>
        <div class="content flex-1"style="max-width:100%;">

        <div class="header " >
        <h2 class="mt-4 mb-8 absolute" style="font-weight:bold;font-size:23px; margin-top:70px; left:50%;transform: translate(-50%);">@yield('header')</h2>
        </div>
        <div id="body" class="body" style=
        "margin-top: 130px;
        margin-left: 10px;
        margin-right: 10px;">
            <h3 >@yield('topic')</h3>
          @yield('content')
    </div>
</body>
<style>
#square::before{
content:"";
width:10px;
height:10px;
background-color: white;
display:inline-block;
margin-right:7px;
}
i{
    right:13px;
    top:21px;
}

li{
    cursor: pointer;
}
#hidden{
    display: none;
}
.bars{
    display:none
}

#menu{
    position:absolute;
}
@media  (max-width: 768px) {
#sidebar {
    display:none;
    width:100%;
    z-index:100;

}
#menu{
    z-index:1000;
}
}
</style>
<script>
let click=document.getElementById("click");
let hidden=document.getElementById("hidden");
let menu=document.getElementById("menu");
let sidebar=document.getElementById("sidebar");
let body=document.getElementById("body");

click.addEventListener("click",function(){
    if(hidden.name=="hidden"){
        hidden.style.display="block";
hidden.name="show"
    }else{
        hidden.style.display="none";
        hidden.name="hidden"
    }
    console.log("clicked");
})
menu.addEventListener("click",function(){
        // sidebar.style.display="block";
        // body.style.display="none";
        if(sidebar.name=="hidden"){
        sidebar.style.display="block";
sidebar.name="show"
body.style.display="none";
    }else{
        sidebar.style.display="none";
        sidebar.name="hidden";
        body.style.display="block";

    }
    console.log("clicked");

})



</script>
</html>
