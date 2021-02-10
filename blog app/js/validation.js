function validateregister() {
	var prefix = document.getElementById('prefix').value;
	var fname = document.getElementById('firstname').value;
	var lname = document.getElementById('lastname').value;
	var email = document.getElementById('email').value;
	var phone = document.getElementById('phone').value;
	var password = document.getElementById('password').value;
	var conpasswordpassword = document.getElementById('confirm_password').value;
	var info = document.getElementById('info').value;
	var agree = document.getElementById('agree').checked;

	var prefix_error = document.getElementById('prefix_error');
	var fname_error = document.getElementById('fname_error');
	var lname_error = document.getElementById('lname_error');
	var email_error = document.getElementById('email_error');
	var phone_error = document.getElementById('phone_error');
	var password_error = document.getElementById('password_error');
	var conpasswordpassword_error = document.getElementById('conpasswordpassword_error');
	var info_error = document.getElementById('info_error');
	var agree_error = document.getElementById('term_error');


	if(prefix=="Choose..") {
		prefix_error.innerHTML="*Please Select";
		return false;
	} else if(prefix != ""){
		prefix_error.innerHTML="";
	}
	
	if(fname=="") {
		fname_error.innerHTML="*Please fill the first name";
		return false;
	} else if(fname != ""){
		fname_error.innerHTML="";
	}
	
	if(lname=="") {
		lname_error.innerHTML="*Please fill the last name";
		return false;
	} else if(lname !=""){
		lname_error.innerHTML="";
	}
	
	if(email=="") {
		email_error.innerHTML = "*Please Enter the Email";
		return false;
	} else if(email.indexOf('@') <= 0) {
		email_error.innerHTML = "*Invalid Email";
		return false;
	} else if ((email.charAt(email.length-4)!=".") &&(email.charAt(email.length-3)!=".")) {
		email_error.innerHTML = "*Invalid Email";
		return false;
	} else if(email != "") {
		email_error.innerHTML = "";
	}

	if(phone =="") {
		phone_error.innerHTML="Please Enter phone."
		return false;
	}else if(phone !="") {
		phone_error.innerHTML=""
	}
	if(password=="") {
		password_error.innerHTML = "*Please Enter the Password";
		return false;
	} else if(password != "") {
		password_error.innerHTML = "";
	}
	if(conpasswordpassword=="") {
		conpasswordpassword_error.innerHTML = "*Please Enter the Password";
		return false;
	} else if(conpasswordpassword != "") {
		conpasswordpassword_error.innerHTML = "";
	}

	if(password!=conpasswordpassword) {
		conpasswordpassword_error.innerHTML = "*Password Does not matched";
		return false;
	} else {
		conpasswordpassword_error.innerHTML = "";
	}

    if(info=="") {
		info_error.innerHTML="*Please fill the last name";
		return false;
	} else if(info !=""){
		info_error.innerHTML="";
	}

	if(!agree) {
		agree_error.innerHTML="Please tick on agree";
		return false;
	} else {
		agree_error.innerHTML="";
	}
}