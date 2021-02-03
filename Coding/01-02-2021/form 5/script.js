function validate() { 
    
    var email = document.forms["userdata"]["email"]; 
    var password = document.forms["userdata"]["password"]; 

    var emailerr = document.getElementById('emailerr');
    var passworderr = document.getElementById('passworderr');

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

    /* if(email.value != "admin@123.com" || password.value != "admin123"){
        window.alert("Invalid eamil-id and pasword."); 
        email.focus(); 
        return false;
    } */
    return true; 
}