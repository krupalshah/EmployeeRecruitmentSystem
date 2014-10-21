
 
window.onload = function() {
    var input1 = document.getElementById('cityspecify');
    input1.style.visibility = 'hidden';
    var city = document.getElementById('city');
    city.onchange = function () {
      if (city.options[city.selectedIndex].value == 0) {
      input1.style.visibility = 'visible';
       } else {
      input1.style.visibility = 'hidden';
     }
   }
   var input2 = document.getElementById('statespecify');
    input2.style.visibility = 'hidden';
    var state = document.getElementById('state');
    state.onchange = function () {
      if (state.options[state.selectedIndex].value == 0) {
      input2.style.visibility = 'visible'; 
	
	  
       } else {
      input2.style.visibility = 'hidden';
	  
     }
   }
}



