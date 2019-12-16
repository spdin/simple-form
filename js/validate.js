function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key)) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

function validate_angka() {
	var jml_kh = document.forms["input_form"]["jml_kh"].value;
	var jml_atf = document.forms["input_form"]["jml_atf"].value;
	
	if (isNaN(jml_kh) || isNaN(jml_atf)) 
	{
		alert("Jumlah anggota harus dalam angka");
		return false;
	}
	else if(jml_kh>10000 || jml_atf>10000)
	{
		alert("Data terlalu banyak");
		return false;
	}
	
}

function submitPostLink()
{
	document.postlink.submit();
}