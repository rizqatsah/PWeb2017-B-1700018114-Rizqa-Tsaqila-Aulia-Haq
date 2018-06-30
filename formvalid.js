function validateForm(){
	var email = document.forms["myForm"]["email"].value;
	var identitas = document.forms["myForm"]["ktp"].value;
	var nama = document.forms["myForm"]["name"].value;
	var katagori = document.forms["myForm"]["categori"].value;
	var pos = document.forms["myForm"]["jabatan"].value;
	var indus = document.forms["myForm"]["industri"].value;
	var alamat = document.forms["myForm"]["address"].value;
	// var setuju = document.forms["myForm"]["setuju"].checked;
	var cek = document.myForm.setuju.checked;

    if (email == "" ) {
        alert("All must be filled out");
        return false;
    }
    else if (identitas == "") {
    	alert("All must be filled out");
        return false;
    }
    else if (nama == "") {
    	alert("All must be filled out");
        return false;
    } 
    else if (katagori == "") {
    	alert("All must be filled out");
        return false;
    }
    else if (pos == "") {
    	alert("All must be filled out");
        return false;
    }
    else if (indus == "") {
    	alert("All must be filled out");
        return false;
    }
    else if (alamat == "") {
    	alert("All must be filled out");
        return false;
    }
    // else if (setuju == "") {
    // 	alert("All must be filled out");
    //     return false;
    // }
    else if(cek == false){
    	alert('You must agree to the terms first.');
    	return false;
    }
}