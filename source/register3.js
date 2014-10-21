

 var next= document.getElementById('registersubmit6');
 

function my()
{ var pass1 = document.getElementById('setpassword');
    var pass2 = document.getElementById('confirm');

    var message = document.getElementById('message1');
	

    var goodColor = "#0C6";
    var badColor = "#FF9B37";
	 if(pass1.value.length>=8 && pass2.value!=" "){
        
        pass1.style.backgroundColor = goodColor;
       message.style.color = goodColor;
	 
        message.innerHTML = "Password Accepted!"
		document.getElementById('registersubmit6').style.display = 'initial';
    }else {
   
        pass1.style.backgroundColor = badColor;
		
        message.style.color = badColor;
        message.innerHTML = "Minimum 8 characters!";
		document.getElementById('registersubmit6').style.display = 'none';return false;
    }
}
function checkPass()
{


    var pass1 = document.getElementById('setpassword');
    var pass2 = document.getElementById('confirm');
    
    var message = document.getElementById('message2');

   var goodColor = "#0C6";
    var badColor = "#FF9B37";
  
    if(pass1.value == pass2.value && pass2.value!=" "){
       
	   
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Matching!"
		document.getElementById('registersubmit6').style.display = 'initial';		
		
		
    }else {
      
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Doesn't Matching!";
		document.getElementById('registersubmit6').style.display = 'none';
		return false;
	
	
    }
	
	
	
}


