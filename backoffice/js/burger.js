const menuburger = document.querySelector(".bgburger")
const burger = document.querySelector(".burger")



// burger.addEventListener("click", (event) => {

//     menuburger.style.visibility = "visible";

// })


burger.addEventListener('click', () => {
    menuburger.classList.toggle('toggle');
})