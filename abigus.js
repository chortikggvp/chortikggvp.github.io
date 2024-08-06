console.log("im coding rn")
let menu = document.getElementById("finallyMENU")
console.log("don't disturb me please im coding🦔")
let x = 0
let button = document.getElementById("buttona")
var buttons = document.getElementsByClassName("B")
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
  
document.getElementById("menu").onclick = function(){
    if(x == 0){
        menu.style.width = "300px";
        x = 1
        document.getElementById("menu").style.marginLeft = "300px";
        document.getElementById("amigo").style.visibility = "visible";
        document.getElementById("buttona").style.visibility = "visible";
        document.getElementById("theeline").style.visibility = "visible";
        
        

    }
    else if(x == 1){
        menu.style.width = "0px";
        
        x = 0
        document.getElementById("menu").style.marginLeft = "0px";
        document.getElementById("amigo").style.visibility = "hidden";
        document.getElementById("buttona").style.visibility = "hidden";
        document.getElementById("theeline").style.visibility = "hidden";
        
        
    }

}
document.getElementById("buttona").onclick = function(){
    window.alert("Not Implemented")
}
