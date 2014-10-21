// JavaScript Document

window.onload = function () {
	document.getElementById('form1').style.display = 'initial';
document.getElementById('form2').style.display = 'none';
	document.getElementById('form3').style.display = 'none';
document.getElementById('registersubmit2').onclick = function () {

    document.getElementById('form1').style.display = 'none';
	document.getElementById('form2').style.display = 'initial';
	document.getElementById('semester3').style.display = 'none';
  }
  document.getElementById('registersubmit4').onclick = function () {

    document.getElementById('form1').style.display = 'none';
	document.getElementById('form2').style.display = 'none';
	document.getElementById('form3').style.display = 'initial';
  }
  document.getElementById('registersubmit6').onclick = function () {form.submit();}
}
