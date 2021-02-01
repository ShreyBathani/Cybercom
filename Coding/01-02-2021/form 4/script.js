function validate() { 
    var name = document.forms["userdata"]["name"]; 
    var email = document.forms["userdata"]["email"]; 
    var subject = document.forms["userdata"]["subject"]; 
    var message = document.forms["userdata"]["message"]; 
 

    if (name.value == "") { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 

    if (email.value == "") { 
        window.alert("Please enter your email"); 
        email.focus(); 
        return false; 
    }

    if (subject.value == "") { 
        window.alert("Please enter subject."); 
        subject.focus(); 
        return false; 
    }  

    if (message.value == "") { 
        window.alert("Please enter your message."); 
        message.focus();
        return false; 
    } 
    return true; 
}