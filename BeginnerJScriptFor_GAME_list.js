window.addEventListener('DOMContentLoaded',init,false);
            
function init() {
    alert('The page loaded!');
    var button = document.getElementsByClassName("button")
}

button.addEventListener('click', HideSSB,false)

function HideSSB(){
    document.getElementsByClassName('SSB')[0].style.visibility='hidden';
    
}