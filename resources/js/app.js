import './bootstrap';
let click=document.getElementById("click");
let hidden=document.getElementById("hidden");
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
