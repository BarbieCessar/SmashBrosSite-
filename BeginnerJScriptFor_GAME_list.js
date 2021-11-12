window.addEventListener('DOMContentLoaded',init,false);
            
function init() {
    var button = document.getElementsByClassName("button")
    button[0].addEventListener('click',HideSSB,false)
    button[1].addEventListener('click',HideSSB2,false)
    button[2].addEventListener('click',HideSSB3,false)
    button[3].addEventListener('click',HideSSB4,false)
    button[4].addEventListener('click',HideSSB5,false)
}

function HideSSB(){
    var SSB = document.getElementsByClassName('1')
    for (var i = 0, length = SSB.length; i < length; i++) {
    if( SSB[i].style.visibility==='hidden'){
        SSB[i].style.visibility='visible';
    }else{
        SSB[i].style.visibility='hidden';
}

}
}
function HideSSB2(){
    var SSB2 = document.getElementsByClassName('2')
    for (var i = 0, length = SSB2.length; i < length; i++) 
   {
    if( SSB2[i].style.visibility==='hidden'){
        SSB2[i].style.visibility='visible';
    }else{
        SSB2[i].style.visibility='hidden';
}

}

}
function HideSSB3(){
    var SSB3 = document.getElementsByClassName('3')
    for (var i = 0, length = SSB3.length; i < length; i++) 
   {
    if( SSB3[i].style.visibility==='hidden'){
        SSB3[i].style.visibility='visible';
    }else{
        SSB3[i].style.visibility='hidden';
}

}


}
function HideSSB4(){
    var SSB4 = document.getElementsByClassName('4')
    for (var i = 0, length = SSB4.length; i < length; i++) 
    {
    if( SSB4[i].style.visibility==='hidden'){
        SSB4[i].style.visibility='visible';
    }else{
        SSB4[i].style.visibility='hidden';
}

}


}
function HideSSB5(){
    var SSB5 = document.getElementsByClassName('5')
    for (var i = 0, length = SSB5.length; i < length; i++) 
    {
    if( SSB5[i].style.visibility==='hidden'){
        SSB5[i].style.visibility='visible';
    }else{
        SSB5[i].style.visibility='hidden';
}

}


}

function search_char() {

    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByTagName("tr");
      var on = 0;
     
    for (i = 1; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="table-row";                 
        }
    }
    
}
