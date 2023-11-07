const toggle = document.querySelector("#toggle");

toggle.addEventListener("click", ()=>{
    const pw = document.querySelector("#password");
    if(pw.type == "password"){
        pw.type = "text";
        toggle.src = "icon/pw.svg";
    }else{
        pw.type = "password";
        toggle.src = "icon/spw.svg";
    }
});