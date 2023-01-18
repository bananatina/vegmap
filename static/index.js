const damiDataStat = [156, 35, 25, 126, 79, 85, 3, 10, 15, 36, 45, 11, 2, 49, 33, 21, 16, 75, 18, 19, 32, 21]
const damiObj = [
    {
        "id": 1,
        "city": "Taipei City",
        "amount": 56,
        "avg": 200,
        "menu_type": "Chinese"
    },
    {
        "id": 2,
        "city": "Tainan",
        "amount": 62,
        "avg": 160,
        "menu_type": "Japanese"
    },
    {
        "id": 3,
        "city": "Hualien",
        "amount": 20,
        "avg": 100,
        "menu_type": "Chinese"
    },
    {
        "id": 4,
        "city": "Yilan",
        "amount": 35,
        "avg": 120,
        "menu_type": "Taiwanese"
    }
];
function showinfo(obj) {
    info.classList.add("display");
    document.querySelector("#info h3").innerHTML = obj[0]["city"];
    document.getElementById("dataAmount").innerHTML = obj[0]["amount"];
    document.getElementById("dataAvg").innerHTML = obj[0]["avg"];
    document.getElementById("dataMenu").innerHTML = obj[0]["menu_type"];
}
//infobox disapear
const maplist = document.querySelectorAll("#map a");
for (let i of maplist) {
    i.addEventListener("mouseleave", () => {
        // info.style.display = "none";
        info.classList.remove("display");
        homeDescription.style.display = "block";
    })
}
for (let i of maplist) {
    let mapId = document.getElementById(i.id);
    mapId.addEventListener("mouseover", () => {
        let cityName = i.getAttribute("xlink:href").split("map=")[1];
        // console.log(cityName);
        let obj = damiObj.filter(e => {
            // console.log(e.city);
            return e.city == cityName;
        })
        console.log(obj);
        showinfo(obj);
        homeDescription.style.display = "none";
    })
}
// Map colouring
let mapBlock = document.querySelectorAll("#map path");
for (let i = 0; i <= mapBlock.length; i++) {
    if (damiDataStat[i] > 100) {
        mapBlock[i].style.fill = "#659d63";
    } else if (damiDataStat[i] > 80) {
        mapBlock[i].style.fill = "#70ae6e";
    } else if (damiDataStat[i] > 60) {
        mapBlock[i].style.fill = "#8dbe8b";
    } else if (damiDataStat[i] > 40) {
        mapBlock[i].style.fill = "#a9cea8";
    } else if (damiDataStat[i] > 20) {
        mapBlock[i].style.fill = "#c6dfc5";
    } else if (damiDataStat[i] > 0) {
        mapBlock[i].style.fill = "#e2efe2";
    }
} 