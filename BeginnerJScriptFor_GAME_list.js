window.addEventListener('DOMContentLoaded',init,false);
            
function init() {
    var button = document.getElementsByClassName("button")
    button[0].addEventListener('click',HideSSB,false)
    button[1].addEventListener('click',HideSSB2,false)
}

function HideSSB(){
    var SSB = document.getElementsByClassName('SSB')
    for (var i = 0, length = SSB.length; i < length; i++) 
    SSB[i].style.visibility='hidden';


}
function HideSSB2(){
    var SSB2 = document.getElementsByClassName('SSBB')
    for (var i = 0, length = SSB2.length; i < length; i++) 
    SSBB[i].style.visibility='hidden';


}