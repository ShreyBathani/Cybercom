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
     
    var flag = 0;
    if (fname.value == "") { 
        window.alert("Please enter your first name."); 
        fname.focus(); 
        return false; 
    } 

    if (lname.value == "") { 
        window.alert("Please enter your last name."); 
        lname.focus(); 
        return false; 
    } 

    if (day.value == "" || month.value == "" || year.value == "") { 
        window.alert("Please enter your Birth date.");  
        return false; 
    }

    if (gender.value == "") { 
        window.alert("Please select your gender."); 
        return false; 
    }

    if (country.value == "") { 
        window.alert("Please select your country.");
        country.focus();
        return false; 
    }

    if (email.value == "") { 
        window.alert("Please enter your email.");
        email.focus(); 
        return false; 
    }

    if (phone.value == "") { 
        window.alert("Please enter your phone nummber.");
        phone.focus(); 
        return false; 
    }

    if (password.value == "") { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return false; 
    }

    if (confirmpass.value == "") { 
        window.alert("Please re-enter your password."); 
        confirmpass.focus(); 
        return false; 
    } 
    if (password.value != confirmpass.value){ 
        window.alert("password does'n match."); 
        confirmpass.focus(); 
        return false; 
    }   

    if (agree.checked == false) { 
        window.alert("Please accept Terms.");  
        return false; 
    }
    return true; 
}