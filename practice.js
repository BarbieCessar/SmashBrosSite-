window.addEventListener('DOMContentLoaded',init,false);
            
function init() {
    alert('The page loaded!');
}

var buttons = document.getElementsByTagName("button");
var button = buttons[0];
button.addEventListener('click',show_hide,false);
element.style.display = "none"