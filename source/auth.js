
window.onload = function () {
	document.getElementById('f1').style.display = 'none';
document.getElementById('f2').style.display = 'none';

document.getElementById('f3').style.display = 'none';
document.getElementById('f4').style.display = 'none';

	
  document.getElementsByName('frad')[0].onchange = function () {

    document.getElementById('f1').style.display = 'initial';

	document.getElementById('f2').style.display = 'none';
	
  }
  document.getElementsByName('frad')[1].onchange = function () {

    document.getElementById('f1').style.display = 'none';
	
document.getElementById('f2').style.display = 'initial';

  }
  }
  



