/* Toggle menu */
var ProductImg = document.getElementById("ProductImg");
var SmallImg = document.getElementsByClassName("small-img");

function menutoggle(){
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    if(MenuItems.classList.contains("active")){
        MenuItems.classList.remove("active");
    }else{
        MenuItems.classList.add("active");
    }

    if(MenuItems.style.maxHeight === "0px")
    {
        MenuItems.style.maxHeight = "200px";
    }
    else{
        MenuItems.style.maxHeight = "0px";
        // MenuItems.hide();
    }
}
    SmallImg[0].onclick = function(){
    ProductImg.src = SmallImg[0].src;
}
    SmallImg[1].onclick = function(){
    ProductImg.src = SmallImg[1].src;
}
    SmallImg[2].onclick = function(){
    ProductImg.src = SmallImg[2].src;
}
    SmallImg[3].onclick = function(){
    ProductImg.src = SmallImg[3].src;
}

