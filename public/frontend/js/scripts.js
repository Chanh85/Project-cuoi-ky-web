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

//Get data
const nameInput = document.querySelector("#name")
const email = document.querySelector("#email")
const message = document.querySelector("#message")
const success = document.querySelector("#success")
const errorNodes = document.querySelectorAll(".error")

//Validate data
function validateForm(){

    clearMessages();
    let errorFlag = false;

    if(nameInput.value.length < 1){
        errorNodes[0].innerText = "Name cannot be blank";
        nameInput.classList.add("error-border");
        errorFlag = true;
    }
    if(!emailIsValid(email.value)){
        errorNodes[1].innerText = "Invalid email address";
        email.classList.add("error-border");
        errorFlag = true;
    }
    if(message.value.length < 1){
        errorNodes[2].innerText = "Please enter message";
        message.classList.add("error-border");
        errorFlag = true;
    }

    if(!errorFlag){
        success.innerText = "Success!"
    }
}

function clearMessages(){
    for(let i = 0 ; i < errorNodes.length; i++){
        errorNodes[i].innerText = "";
    }
    success.innerText = "";
    nameInput.classList.remove("error-border");
    email.classList.remove("error-border");
    message.classList.remove("error-border");
}

function emailIsValid(email){
    let pattern = /\S+@\S+\.\S+/;
    return pattern.test(email);
}

const container = document.querySelector(".container"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFileds = document.querySelectorAll(".password");

// js code to show/hide password and change icon

pwShowHide.forEach(eyeIcon =>{
    eyeIcon.addEventListener("click", ()=>{
        pwFileds.forEach(pwField =>{
            if(pwField.type === "password"){
                pwField.type = "text";

                pwShowHide.forEach(icon =>{
                    icon.classList.replace("uil-eye-slash", "uil-eye")
                })
            }
            else{
                pwField.type = "password";
                pwShowHide.forEach(icon =>{
                    icon.classList.replace("uil-eye", "uil-eye-slash")
                })
            }
        })
    })
})

