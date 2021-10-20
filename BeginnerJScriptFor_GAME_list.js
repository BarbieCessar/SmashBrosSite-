window.addEventListener('DOMContentLoaded',init,false);
            
function init() {
    alert('The page loaded!');
    var buttons = document.getElementsByTagName("button")
    button[0].addEventListener('click', HideSSB,false)
}

function HideSSB(){
    document.getElementsByClassName('SSB')[0].style.visibility='hidden';
    
}