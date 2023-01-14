const inquery = document.getElementById("requestType");
const formNewShop = document.getElementById("formNewShop");
inquery.addEventListener("change", () => {
    if (inquery.value === "newShop") {
        formNewShop.classList.remove("hidden");
    } else {
        formNewShop.classList.add("hidden");
    }
})