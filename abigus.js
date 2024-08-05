console.log("im coding rn")
let menu = document.getElementById("finallyMENU")
console.log("don't disturb me please im coding🦔")
let x = 0

document.getElementById("menu").onclick = function(){
    if(x == 0){
        menu.style.width = "300px";
        x = 1
    }
    else if(x == 1){
        menu.style.width = "0px";
        x = 0
    }

}
