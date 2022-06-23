const sideMenu = document.querySelector("aside");
const menuBtn   = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themToggler = document.querySelector(".theme-toggler");

///Show sidebar
if(menuBtn){
    menuBtn.addEventListener('click', () =>{
        sideMenu.style.display = 'block';
    })
}

///Close sidebar
if(closeBtn){
    closeBtn.addEventListener('click', () => {
        sideMenu.style.display = 'none';
    })
}

// change theme
if(themToggler){
    themToggler.addEventListener('click', () =>{
        document.body.classList.toggle('dark-theme-variables');

        themToggler.querySelector('span:nth-child(1)').classList.toggle('active');
        themToggler.querySelector('span:nth-child(2)').classList.toggle('active');
    })
}
