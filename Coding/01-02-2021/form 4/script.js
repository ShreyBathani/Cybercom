function validate() { 
    var name = document.forms["userdata"]["name"]; 
    var email = document.forms["userdata"]["email"]; 
    var subject = document.forms["userdata"]["subject"]; 
    var message = document.forms["userdata"]["message"]; 
 
    var nameerr = document.getElementById('nameerr');
    var emailerr = document.getElementById('emailerr');
    var subjecterr = document.getElementById('subjecterr');
    var messageerr = document.getElementById('messageerr');


    nameerr.textContent = '';
    if (name.value.trim() == "" || name.value.trim() == null) {
        nameerr.textContent = '*Please enter your name.'; 
        name.focus(); 
        return false; 
    }
    else if(!name.value.match(/^[A-Za-z ]+$/)){
        nameerr.textContent = '*Only letter and whitespace are alowed'; 
        name.focus(); 
        return false;
    } 

    emailerr.textContent = '';
    if (email.value == "") { 
        emailerr.textContent = "*Please enter your email.";
        email.focus(); 
        return false; 
    }
    else if (!email.value.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
        email.focus(); 
        emailerr.textContent = "*Use valid email format.";
        return false;
	}

    subjecterr.textContent = '';
    if (subject.value.trim() == "" || subject.value.trim() == null) { 
        subjecterr.textContent = '*This field is required'; 
        subject.focus(); 
        return false; 
    }
    
    messageerr.textContent = '';
    if (message.value.trim() == "" || message.value.trim() == null) { 
        messageerr.textContent = '*This field is required'; 
        message.focus(); 
        return false; 
    }
    return true; 
}