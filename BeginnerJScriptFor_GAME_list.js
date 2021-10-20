window.addEventListener('DOMContentLoaded',init,false);
            
function init() {
    var button = document.getElementsByClassName("button")
    button[0].addEventListener('click',HideSSB,false)
}

function HideSSB(){
    var SSB = document.getElementsByClassName('SSB')
    for (var i = 0, length = SSB.length; i < length; i++) 
    SSB[i].style.visibility='hidden';


}