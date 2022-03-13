function showinfo(name){
    info.style.display="block";
    document.querySelector("#info h3").innerHTML=name;
}

//infobox disapear
const maplist = document.querySelectorAll("#map a");
for(let i of maplist){
    i.addEventListener("mouseleave",()=>{
        info.style.display="none";
    })
}
for(let i of maplist){
    let mapId =document.getElementById(i.id);
    console.log(i.id)
    mapId.addEventListener("mouseover",()=>{
        showinfo(i.id,);
    })
}
filter.addEventListener("click",()=>{filterbox.classList.toggle("open")})
mode.addEventListener("click",()=>{restaurantList.classList.toggle("open")})

