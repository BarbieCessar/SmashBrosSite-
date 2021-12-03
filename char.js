window.addEventListener('DOMContentLoaded',myFunction,false);

/* ebb: We are missing you adding an event listener to listen for the input event,
 * and then fire the function to show/hide. */

/* Check working example HTML and JS at the La Dama Boba Project:
 * http://lope.newtfire.org/peopleList.html
 *  */

function myFunction() {
 var input,filter,table,tr,td,i,txtValue;
 input = document.getElementById("myInput")
 filter =input.value.toUpperCase();
 table = document.getElementById("myTable");
 tr = table.getElementsByTagName("tr");
 for (i=0; i<tr.length; i++){
     td = tr[i].getElementsByTagName("td")[0];
     if (td){
         txtValue = td.textContent || td.innerText;
         if (txtValue.toUpperCase().indexOf(filter) > -1){
             tr[i].style.display = "";}
             else {
                 tr[i].style.display = "none";
             }
         }
     }
   }