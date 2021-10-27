window.addEventListener('DOMContentLoaded',init,false);
            
function init() {
    var button = document.getElementsByClassName("button")
    button[0].addEventListener('click',HideSSB,false)
    button[1].addEventListener('click',HideSSB2,false)
    button[2].addEventListener('click',HideSSB3,false)
    button[3].addEventListener('click',HideSSB4,false)
    button[4].addEventListener('click',HideSSB5,false)
    button[5].addEventListener('click',ShowSSB,false)
    button[6].addEventListener('click',ShowSSB2,false)
    button[7].addEventListener('click',ShowSSB3,false)
    button[8].addEventListener('click',ShowSSB4,false)
    button[9].addEventListener('click',ShowSSB5,false)
}

function HideSSB(){
    var SSB = document.getElementsByClassName('SSB')
    for (var i = 0, length = SSB.length; i < length; i++) 
    SSB[i].style.visibility='hidden';


}
function HideSSB2(){
    var SSB2 = document.getElementsByClassName('SSBM')
    for (var i = 0, length = SSB2.length; i < length; i++) 
    SSB2[i].style.visibility='hidden';


}
function HideSSB3(){
    var SSB3 = document.getElementsByClassName('SSBB')
    for (var i = 0, length = SSB3.length; i < length; i++) 
    SSB3[i].style.visibility='hidden';


}
function HideSSB4(){
    var SSB4 = document.getElementsByClassName('SSB4')
    for (var i = 0, length = SSB4.length; i < length; i++) 
    SSB4[i].style.visibility='hidden';


}
function HideSSB5(){
    var SSB5 = document.getElementsByClassName('SSBU')
    for (var i = 0, length = SSB5.length; i < length; i++) 
    SSB5[i].style.visibility='hidden';


}
function ShowSSB(){
    var SSB = document.getElementsByClassName('SSB')
    for (var i = 0, length = SSB.length; i < length; i++) 
    SSB[i].style.visibility='visible';


}
function ShowSSB2(){
    var SSB2 = document.getElementsByClassName('SSBM')
    for (var i = 0, length = SSB2.length; i < length; i++) 
    SSB2[i].style.visibility='visible';


}
function ShowSSB3(){
    var SSB3 = document.getElementsByClassName('SSBB')
    for (var i = 0, length = SSB3.length; i < length; i++) 
    SSB3[i].style.visibility='visible';


}
function ShowSSB4(){
    var SSB4 = document.getElementsByClassName('SSB4')
    for (var i = 0, length = SSB4.length; i < length; i++) 
    SSB4[i].style.visibility='visible';


}
function ShowSSB5(){
    var SSB5 = document.getElementsByClassName('SSBU')
    for (var i = 0, length = SSB5.length; i < length; i++) 
    SSB5[i].style.visibility='visible';


}