

window.onload = function () {
	document.getElementById('semester1').style.display = 'none';
document.getElementById('semester2').style.display = 'none';
	document.getElementById('semester3').style.display = 'none';
  document.getElementsByName('rad1')[0].onchange = function () {

    document.getElementById('semester1').style.display = 'initial';
	document.getElementById('semester2').style.display = 'none';
	document.getElementById('semester3').style.display = 'none';
  }
  document.getElementsByName('rad1')[1].onchange = function () {

    document.getElementById('semester1').style.display = 'none';
document.getElementById('semester2').style.display = 'initial';
	document.getElementById('semester3').style.display = 'initial';

  }
}



