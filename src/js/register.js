const toggle = document.querySelectorAll("#toggle");

toggle.forEach(el => {
    el.addEventListener("click", ()=>{
        const pw = document.querySelectorAll("#password");
        pw.forEach(e => {     
            if(e.type == "password"){
                e.type = "text";
                el.src = "icon/pw.svg";
            }else{
                e.type = "password";
                el.src = "icon/spw.svg";
            }
        });
    });
});