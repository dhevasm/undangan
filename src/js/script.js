const menu = document.querySelector(".menu");

menu.addEventListener("click", () =>{
    const dropdown = document.querySelector(".dropdown");
    dropdown.classList.toggle("show");
});

const ab = document.querySelector(".ab");
ab.addEventListener("click", ()=>{
    menu.click();
});

const bro = document.querySelector(".bro");
bro.addEventListener("click", ()=>{
    menu.click();
});

const mode = document.querySelector("#mode");

mode.addEventListener("click", function(e){
    document.body.classList.toggle("dark");
    const navbar = document.querySelector(".navbar");
    const card = document.querySelectorAll(".card");
    e.preventDefault();
    if(document.body.classList == "dark"){
        mode.innerHTML = "Mode : Dark";
        navbar.style.backgroundColor = "grey";
        card.forEach(el =>{
            el.style.color = "black";
        });
    }else{
        mode.innerHTML = "Mode : Light";
        navbar.style.backgroundColor = "#ffff";
    }
});



