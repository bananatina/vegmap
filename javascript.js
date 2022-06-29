var path = window.location.pathname;
var page = path.split("/").pop();
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const map = urlParams.get('map')
const restaurantList = document.getElementById("restaurantList");

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

function createRestaurantElem(){
    const list = document.querySelector("#restaurantList ul");
    const newLi = document.createElement("li");
    const imgBox = document.createElement("div");
    imgBox.classList.add("imgBox");
    newLi.appendChild(imgBox);
    imgBox.style.backgroundImage="url(http://picsum.photos/300/200)";
    const restaurantElemBody = document.createElement("div");
    restaurantElemBody.classList.add("restaurantElem");
    let textBlock = ["Diet Type","Menu Type","Contact","Address","Transportation","Business Hours","Average Cost","Website"];
    for(let i of textBlock){
        const restaurantInfo = document.createElement("div");
        restaurantInfo.classList.add("restaurantInfo");
        const h5 = document.createElement("h5");
        h5.innerHTML= i;
        restaurantInfo.appendChild(h5);
        restaurantElemBody.appendChild(restaurantInfo);
    }
    newLi.appendChild(restaurantElemBody);
    list.appendChild(newLi);


}