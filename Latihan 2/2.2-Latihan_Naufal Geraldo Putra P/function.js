let alignState = false;
let colorState = false;


function align(){
    let text = document.querySelector(".container");
    if(!alignState){
        text.style.textAlign = "center";
        alignState = true;
    } else {
        text.style.textAlign = "left";
        alignState = false
    }
}

function color(){
    let box = document.querySelector(".media");
    if(!colorState){
        box.style.backgroundColor = "black";
        colorState = true;
    } else {
        box.style.backgroundColor = "orange";
        colorState = false
    }
}