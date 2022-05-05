/* Toggle menu */

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
