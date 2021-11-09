window.addEventListener('DOMContentLoaded',myFunction,false);

/* ebb: We are missing you adding an event listener to listen for the input event,
 * and then fire the function to show/hide. */

/* Check working example HTML and JS at the La Dama Boba Project:
 * http://lope.newtfire.org/peopleList.html
 *  */

function myFunction() {
 
 var input = document.getElementById("myInput")
 {input[0].value.toUpperCase();}
 var  table = document.getElementById("myTable");
  tr = table[0].childNodes("tr");
    for (i = 0; i < tr.length; i++) {
    td = tr[i].childNodes[0]; {
    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
      }
      }
      }