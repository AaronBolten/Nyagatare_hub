const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const navRight = document.querySelector(".nav-right");


hamburger.addEventListener("click", () =>{
    hamburger.classList.toggle("active");
    navLinks.classList.toggle("active");
    navRight.classList.toggle("active");
})

document.querySelectorAll(".nav-items").forEach(n => n.
    addEventListener("click", () =>{
        hamburger.classList.remove("active");
        navLinks.classList.remove("active");
    }))

function showText(){
    console.log('helo world!');
    
}