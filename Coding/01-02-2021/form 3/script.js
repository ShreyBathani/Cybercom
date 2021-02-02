function validate() { 
    var fname = document.forms["userdata"]["fname"];
    var lname = document.forms["userdata"]["lname"];
    var day = document.forms["userdata"]["day"];
    var month = document.forms["userdata"]["month"];
    var year = document.forms["userdata"]["year"];
    var gender = document.forms["userdata"]["gender"];
    var country = document.forms["userdata"]["country"];
    var email = document.forms["userdata"]["email"];
    var phone = document.forms["userdata"]["phone"];
    var password = document.forms["userdata"]["password"];
    var confirmpass = document.forms["userdata"]["confirmpass"];
    var agree = document.forms["userdata"]["agree"];

    var fnameerr = document.getElementById('fnameerr');
    var lnameerr = document.getElementById('lnameerr');
    var doberr = document.getElementById('doberr');
    var gendererr = document.getElementById('gendererr');
    var countryerr = document.getElementById('countryerr');
    var emailerr = document.getElementById('emailerr');
    var phoneerr = document.getElementById('phoneerr');
    var passworderr = document.getElementById('passworderr');
    var confirmpasserr = document.getElementById('confirmpasserr');
    var agreeerr = document.getElementById('agreeerr');
     

    fnameerr.textContent = '';
    if (fname.value == "") {
        fnameerr.textContent = "Please enter your first name.";
        fname.focus(); 
        return false; 
    } 

    lnameerr.textContent = '';
    if (lname.value == "") { 
        lnameerr.textContent = "Please enter your last name."; 
        lname.focus(); 
        return false; 
    } 

    doberr.textContent = '';
    if (day.value == "" || month.value == "" || year.value == "") {
        doberr.textContent = "Please enter your Birth date."; 
        return false; 
    }

    gendererr.textContent = '';
    if (gender.value == "") { 
        gendererr.textContent = "Please select your gender.";
        return false; 
    }

    countryerr.textContent = '';
    if (country.value == "") { 
        countryerr.textContent = "Please select your country.";
        country.focus();
        return false; 
    }

    emailerr.textContent = '';
    if (email.value == "") { 
        emailerr.textContent = "Please enter your email.";
        email.focus(); 
        return false; 
    }
    else if (!email.value.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
        email.focus(); 
        emailerr.textContent = "Use valid email format.";
        return false;
	}

    phoneerr.textContent = '';
    if (phone.value == "") { 
        phoneerr.textContent = "Please enter your phone.";
        phone.focus(); 
        return false; 
    }else if (phone.value.length != 10) {
		phone.focus(); 
        phoneerr.textContent = "Only 10 characters.";
        return false;
	} else if (!phone.value.match(/^\d{10}$/)) {
        phone.focus();
        phoneerr.textContent = "Only allowed number.";
        return false;
	}

    passworderr.textContent = '';
    if (password.value == "") { 
        passworderr.textContent = "Please enter your password."; 
        password.focus(); 
        return false; 
    }
    else if(password.value.length < 6){
        passworderr.textContent = 'Password must be at least 6 characters long'; 
        password.focus(); 
        return false;
    }

    confirmpasserr.textContent = '';
    if (confirmpass.value == "") { 
        confirmpasserr.textContent = "Please re-enter your password.";  
        confirmpass.focus(); 
        return false; 
    }
    else if(confirmpass.value.length < 6){
        confirmpasserr.textContent = 'Password must be at least 6 characters long'; 
        confirmpass.focus(); 
        return false;
    } 

    confirmpasserr.textContent = '';
    if (password.value != confirmpass.value){ 
        confirmpasserr.textContent = "password does'n match."; 
        confirmpass.focus(); 
        return false; 
    }   

    agreeerr.textContent = '';
    if (agree.checked == false) { 
        agreeerr.textContent = "Please accept Terms.";  
        return false; 
    }
    return true; 
}