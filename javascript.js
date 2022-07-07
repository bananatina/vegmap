var path = window.location.pathname;
var page = path.split("/").pop();
const width  = window.innerWidth
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const map = urlParams.get('map')
const restaurantList = document.getElementById("restaurantList");
const damiData = [['SU 蔬食料理', 'Su Vegetarian Cuisine', 'Vegan/Vegetarian', 'French', 'permanently closed', 'ZH、EN', '( +886-2-2894-6428 )', 'No. 228, Guangming Rd., Beitou Dist., Taipei City', 'MRT Xinbeitou Station → Walk 4 mins', '11:00~21:00', 'around NT$230', 'www.su-veges.com', '25.135874,121.505804'],['毫光回田蔬苑', 'Hui Tien Vegetarianism', 'Vegan/Vegetarian', 'Chinese', '', 'ZH、EN', '( +886-2-2883-2168 )', 'No. 357, Zhongzheng Rd., Shilin Dist, Taipei City', 'MRT Shilin Station → Walk 7 mins', '11:00~14:30 、17:00~21:00', 'around NT$150', 'www.hawkuang.com', '25.094301,121.522190'],[ 'Herban Kitchen & Bar二本餐廳', 'Herban Kitchen & Bar', 'Vegan and Vegetarian  special orders allowed', 'Exotic', '', 'ZH、EN', '(  +886-2-8773-7033', "No. 27, Lane 101, Zhongxiao E. Rd., Section 4, Da'an Dist., Taipei City", 'MRT Zhongxiao Dunhua Station → Walk 3 mins', '12:00~23:00', 'around NT$280', 'tripmoment.com/Trip/18285', '25.042963,121.548166'],[ '家禾素食坊', 'Jia He Vegetarian( 家禾)', 'Vegan / Buddhist Vegan / Vegetarian', 'Chinese', '', 'EN', '+886-2-2626-5730', 'No. 254, Zhongzheng Rd., Tamsui Dist., New Taipei City', '', '', '', '', '25.171267,121.438691'],['安巒山莊休閒農場', 'An-Luan Vacation Villa (安巒)', 'Vegan / Buddhist Vegetarian / Vegetarian', 'Chinese', '', 'EN', ' +886-8-781-1345 ', 'No. 134-1, Yongkang Rd., Wanluan Township, Pingtung County', '', '', '', '', '22.566568,120.562352'],['楊師姊素食館', 'Yang Shi Jie Vegetarian Restaurant(楊師姊)', 'Vegan / Buddhist Vegetarian / Vegetarian', 'Chinese', '', 'EN', ' +886-836-23252 、 +886-953-360615', 'No. 159, Fuxing Village, Nangan Township, Lienchiang County', '', '', '', '', '26.164559,119.958154']]
function showinfo(name){
    info.style.display="block";
    document.querySelector("#info h3").innerHTML=name;
}

//infobox disapear
const maplist = document.querySelectorAll("#map a");
for(let i of maplist){
    i.addEventListener("mouseleave",()=>{
        info.style.display="none";
        homeDescription.style.display="block";
    })
}
for(let i of maplist){
    let mapId =document.getElementById(i.id);
    // console.log(i.id)
    mapId.addEventListener("mouseover",()=>{
        showinfo(i.id,);
        homeDescription.style.display="none";
    })
}

function createRestaurantElem(data){
    const list = document.querySelector("#restaurantList ul");
    const newLi = document.createElement("li");
    const imgBox = document.createElement("div");
    imgBox.classList.add("imgBox");
    newLi.appendChild(imgBox);
    imgBox.style.backgroundImage="url(http://picsum.photos/300/200)";
    const restaurantElemBody = document.createElement("div");
    restaurantElemBody.classList.add("restaurantElem");
    const restaurantName = document.createElement("h3");
    restaurantName.classList.add("restaurantName");
    restaurantElemBody.appendChild(restaurantName);
    restaurantName.innerHTML= data[1]+" ("+data[0]+")";
    let textBlock = ["Diet Type","Menu Type","Status","Languages","Contact","Address","Transportation","Business Hours","Average Cost","Website"];
    textBlock.forEach((block, index)=>{
        const restaurantInfo = document.createElement("div");
        restaurantInfo.classList.add("restaurantInfo");
        const h4 = document.createElement("h4");
        const p = document.createElement("p");
        h4.innerHTML= block;
        p.innerHTML= data[index+2];
        // console.log(data[index]);
        restaurantInfo.appendChild(h4);
        restaurantInfo.appendChild(p);
        restaurantElemBody.appendChild(restaurantInfo);
    });
    newLi.appendChild(restaurantElemBody);
    list.appendChild(newLi);
}
function dietFilter(){
    let checkboxGroup = document.querySelectorAll("#filterbox input[type=checkbox]");
    let filterTarget = document.querySelectorAll(".restaurantInfo:first-of-type p");
    console.log(checkboxGroup);
    console.log(filterTarget);
    checkboxGroup.forEach((e)=>{
        e.addEventListener("change",function(){
            if(e.checked){
                for(let i of filterTarget){
                    if(i.innerHTML.includes(e.labels[0].innerHTML)){
                        console.log(i);
                        i.parentElement.parentElement.parentElement.style.display="flex";
                    }else{
                        i.parentElement.parentElement.parentElement.style.display="none";
                    }
                }
            }
        })
    })
}

if(page == "citymap.html"){
    document.querySelector("#citymapMain h2").innerHTML=map +" Map";
    mode.addEventListener("click",()=>{mapContainer.classList.toggle("hidden"); restaurantList.classList.toggle("hidden")})
    filter.addEventListener("click",()=>{filterbox.classList.toggle("open")})
    // map size
    const gooMap = document.querySelector(".gmap_canvas iframe");
    
    gooMap.setAttribute("width", width*0.8);
    var mapSize = gooMap.getAttribute("width");
    if(width>=1000){
        gooMap.setAttribute("height", mapSize*0.5);
    }else if(width<650){
        gooMap.setAttribute("height", mapSize*1.5);
    }else{
        gooMap.setAttribute("height", mapSize*0.8);
    }

    // Listing
    for(let i of damiData){
        // console.log("address: "+i[7]);
        if(i[7].includes(", "+map)){
            createRestaurantElem(i);
        }
    }
    
    dietFilter();
}


