var info = document.getElementById("info");
var mapBlock = document.querySelectorAll("#map path");
fetch("./all_restaurants.json")
  .then(response => response.json())
  .then(json => {
    console.log(json);
    for(let i =0; i < mapBlock.length; i++){
        var cityname = mapBlock[i].getAttribute("name");
        console.log(json[cityname]);  
        var figure = json[cityname];
        if(figure>20){
            mapBlock[i].style.fill="#659d63";
        }else if(figure>15){
            mapBlock[i].style.fill="#70ae6e";
        }else if(figure>10){
            mapBlock[i].style.fill="#8dbe8b";
        }else if(figure>5){
            mapBlock[i].style.fill="#a9cea8";
        }else if(figure>3){
            mapBlock[i].style.fill="#c6dfc5";
        }else if(figure>0){
            mapBlock[i].style.fill="#e2efe2";
        }else{
            mapBlock[i].style.fill="red";
        }
    } 
});


