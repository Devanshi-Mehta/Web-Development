 // for the date below the search bar
 var today = new Date();  
 var hours = today.getHours();
 
 var mins = today.getMinutes();
 // since getMinutes() return the number, like for 1 min, it will return 1 only, and we want 01
 if(mins == 0 || mins == 1 || mins == 2 || mins == 3 || mins == 4 || mins == 5 || mins == 6 || mins == 7 || mins == 8 || mins == 9 ){
     mins = "0" + mins;
 }

 // to get am/pm
 var ampm = hours >= 12 ? 'pm' : 'am';
 hours = hours > 12 ? hours-12 : hours;
 var date = today.getDate()+'/'+(today.getMonth()+1)+'/'+ today.getFullYear() + ', ' + hours + ":" + mins + " " + ampm;
 document.getElementById("time").innerHTML = date;
 
 

 // to get the month name
 function month_name(month){
     mlist = [ "Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec" ];
     return mlist[month];
 };
 
 document.getElementById("india_p").innerHTML = "Last updated on " + today.getDate() + " " + month_name(today.getMonth()) + " " + hours + ":" + mins + " " + ampm;

 // since we are using a single icon for the notification
 // we want that onclick and offclick, for that we use a
 // which gets 1 when we enable the notifications & 0 when we switch off the notifications
 a = 0;

 // this function is for the notifications
 // it unhides the data and shows the recent notifications at the same time, it also changes the icon
 function change_icon(){
     // when notifications are to be shown and bell icon to be changed
     // Also we assign the div the font size now since we do not want them to take any space
     // so the div was initially assigned font size of zero
     if(a == 0){
         document.getElementById("icon").className = "far fa-bell-slash fa-xs";
         
         document.getElementById("notifications").innerHTML = today.getDate() + " " + month_name(today.getMonth());
         document.getElementById("notifications").style.color = "#007BFF";
         document.getElementById("notifications").style.fontSize = "18px";
         document.getElementById("notifications").style.fontWeight = "bold";
         document.getElementById("notifications").style.marginTop = "20px";
         document.getElementById("notifications").style.marginRight = "36%";


         var x = document.querySelectorAll(".small_p");
         for (var i = 0; i < x.length; i++) {
             x[i].style.fontSize = "12px";
         }
         var y = document.querySelectorAll(".large_p");
         for (var i = 0; i < y.length; i++) {
             y[i].style.fontSize = "13px";
         }

         document.getElementById("hide").style.visibility = "visible";  
         a = 1;

     }
     // hiding the notifications & changing the icon
     // assigning font size zero again
     else{
         document.getElementById("icon").className = "far fa-bell fa-xs";
         
         document.getElementById("notifications").innerHTML = "";
         document.getElementById("hide").style.visibility = "hidden";   

         var x = document.querySelectorAll(".small_p");
         for (var i = 0; i < x.length; i++) {
             x[i].style.fontSize = "0px";
         }
         var y = document.querySelectorAll(".large_p");
         for (var i = 0; i < y.length; i++) {
             y[i].style.fontSize = "0px";
         }
         a = 0;
     }
 }

 function alt_gray()
 {
     var tableElements = document.getElementsByTagName("table") ;
     
     // Changing the color of the heads of table when sun is clicked
     var head = document.getElementsByTagName("th") ;    
     for(var i = 0; i < head.length; i++)
     {
         head[i].style.backgroundColor = "#EDEEEF" ;
     }

     // changing the color of alternate rows
     for(var j = 0; j < tableElements.length; j++)
     {
         var table = tableElements[j] ;
         var rows = table.getElementsByTagName("tr") ;

         for(var i = 0; i <= rows.length; i++)
         {    
             if(i%2==0){
                 rows[i].style.backgroundColor = "#EDEEEF" ;
             }
         }
     }
 }

 function alt_black()
 {
     var tableElements = document.getElementsByTagName("table") ;
     
     // Changing the color of the heads of table when sun is clicked
     var head = document.getElementsByTagName("th") ;    
     for(var i = 0; i < head.length; i++)
     {
         head[i].style.backgroundColor = "#6C757D10" ;
     }

     // changing the color of alternate rows
     for(var j = 0; j < tableElements.length; j++)
     {
         var table = tableElements[j] ;
         var rows = table.getElementsByTagName("tr") ;

         for(var i = 0; i <= rows.length; i++)
         {    
             if(i%2==0){
                 rows[i].style.backgroundColor = "#6C757D10" ;
             }
         }
     }
 }

 // when the sun icon is clicked the entire page gets white
 function sun(){
     document.body.style.backgroundColor  = "white";  
     document.getElementById("side").style.backgroundColor = "#F6F6F7";
     document.getElementById("searchbar").style.backgroundColor = "#F6F6F7";
     document.getElementById("sun").style.backgroundColor = "white";
     document.getElementById("moon").style.backgroundColor = "white";
     document.getElementById("calc").style.backgroundColor = "#6C757D10";
     alt_gray();
 }

 // entire page is again black
 function moon(){
     document.body.style.backgroundColor  = "#161625";  
     document.getElementById("side").style.backgroundColor = "#1e1e30";
     document.getElementById("searchbar").style.backgroundColor = "#1E1E30";
     document.getElementById("sun").style.backgroundColor = "#161625";
     document.getElementById("moon").style.backgroundColor = "#161625";
     document.getElementById("calc").style.backgroundColor = "#1E1E30";
     alt_black();
 }

 //ABOUT NAVBAR

 var modal = document.getElementById("myModal");
 var btn = document.getElementById("about");
 var span = document.getElementsByClassName("close")[0];

 // When the user clicks the button, open the modal 
 btn.onclick = function() {
     modal.style.display = "block";
 }

 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
     modal.style.display = "none";
 }

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
 if (event.target == modal) {
     modal.style.display = "none";
 }
 }

 function sortTable(n) {
     var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
     table = document.getElementById("myTable");
     switching = true;
     //Set the sorting direction to ascending:
     dir = "asc"; 
     /*Make a loop that will continue until
     no switching has been done:*/
     while (switching) {
     //start by saying: no switching is done:
     switching = false;
     rows = table.rows;
     /*Loop through all table rows (except the
     first, which contains table headers):*/
     for (i = 1; i < (rows.length - 1); i++) {
         //start by saying there should be no switching:
         shouldSwitch = false;
         /*Get the two elements you want to compare,
         one from current row and one from the next:*/
         x = rows[i].getElementsByTagName("TD")[n];
         y = rows[i + 1].getElementsByTagName("TD")[n];
         /*check if the two rows should switch place,
         based on the direction, asc or desc:*/
         if (dir == "asc") {
         if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
             //if so, mark as a switch and break the loop:
             shouldSwitch= true;
             break;
         }
         } else if (dir == "desc") {
         if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
             //if so, mark as a switch and break the loop:
             shouldSwitch = true;
             break;
         }
         }
     }
     if (shouldSwitch) {
         /*If a switch has been marked, make the switch
         and mark that a switch has been done:*/
         rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
         switching = true;
         //Each time a switch is done, increase this count by 1:
         switchcount ++;      
     } else {
         /*If no switching has been done AND the direction is "asc",
         set the direction to "desc" and run the while loop again.*/
         if (switchcount == 0 && dir == "asc") {
         dir = "desc";
         switching = true;
         }
     }
     }
 }

 function calc(){
     fev = document.getElementById("fever");
     breath = document.getElementById("breath");
     cough = document.getElementById("cough");
     chest = document.getElementById("chest");
     tired = document.getElementById("tiredness");
     speech = document.getElementById("speech");

     if(breath.checked && chest.checked && speech.checked){
         document.getElementById("result").innerHTML = "Very High Risk!";
     }
     else if((breath.checked && chest.checked)|| (chest.checked && speech.checked) || (speech.checked && breath.checked)){
         document.getElementById("result").innerHTML = "High Risk";
     }
     else if(breath.checked || chest.checked || speech.checked){
         document.getElementById("result").innerHTML = "Moderate Serious";
     }
     else{
         document.getElementById("result").innerHTML = "Low Risk";
     }

     var btns = document.getElementsByClassName("pad");
     for (var i = 0; i< btns.length;i++){
         if(btns[i].checked){
             btns[i].checked = false;
         }
     }

 }

 var input = document.getElementById("searchbar");
 input.addEventListener("keyup", function(event) {
     if (event.keyCode === 13) {
         event.preventDefault();
         var state = input.value.toLowerCase()
         if(state === "maharashtra"){
             document.getElementById("maha").style.boxShadow = "1px 2px  #FF073A";
         }
         else if(state === "delhi"){
             document.getElementById("delhi").style.boxShadow = "1px 2px  #FF073A";
         }
         else if(state === "uttar pradesh"){
             document.getElementById("uttar").style.boxShadow = "1px 2px  #FF073A";
         }
         else if(state == "andhra pradesh"){
             document.getElementById("ap").style.boxShadow = "1px 2px  #FF073A";
         }
         else if(state == "karnataka"){
             document.getElementById("karna").style.boxShadow = "1px 2px  #FF073A";
         }
         else if(state == "tamil nadu"){
             document.getElementById("tn").style.boxShadow = "1px 2px  #FF073A";
         }
         else if(state == "kerala"){
             document.getElementById("kerala").style.boxShadow = "1px 2px  #FF073A";
         }
         else if(state == "west bengal"){
             document.getElementById("wb").style.boxShadow = "1px 2px  #FF073A";
         }
         else if(state == "odisha"){
             document.getElementById("odisha").style.boxShadow = "1px 2px  #FF073A";
         }
         else if(state == "telangana"){
             document.getElementById("tel").style.boxShadow = "1px 2px  #FF073A";
         }
         else{
             alert("Place not found");
         }
         document.location = "#myTable";
     }
});
