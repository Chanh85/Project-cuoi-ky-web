const sideMenu = document.querySelector("aside");
const menuBtn   = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themToggler = document.querySelector(".theme-toggler");

///Show sidebar
menuBtn.addEventListener('click', () =>{
    sideMenu.style.display = 'block';
})
///Close sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

// change theme

themToggler.addEventListener('click', () =>{
    document.body.classList.toggle('dark-theme-variables');

    themToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})
