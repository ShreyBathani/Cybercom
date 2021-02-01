function validate() { 
    
    var email = document.forms["userdata"]["email"]; 
    var password = document.forms["userdata"]["password"]; 

    if (email.value == "") { 
        window.alert("Please enter your email"); 
        email.focus(); 
        return false; 
    }

    if (password.value == "") { 
        window.alert("Please enter your password."); 
        password.focus(); 
        return false; 
    }  

    if(email.value != "admin@123.com" || password.value != "admin123"){
        window.alert("Please enter valid eamil-id and pasword."); 
        email.focus(); 
        return false;
    }
    return true; 
}