function validate() { 
    var fname = document.forms["userdata"]["fname"]; 
    var password = document.forms["userdata"]["password"];
    var gender = document.forms["userdata"]["gender"]; 
    var address = document.forms["userdata"]["address"]; 
    var dob = document.forms["userdata"]["dob"]; 
    var game = document.forms["userdata"]['game[]'];
    var married = document.forms["userdata"]["married"];
    var agree = document.forms["userdata"]['agree'];
     
    var flag = 0;
    if (fname.value == "") { 
        window.alert("Please enter your name."); 
        fname.focus(); 
        return false; 
    } 

    if (password.value == "") { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return false; 
    }

    if (gender.value == "") { 
        window.alert("Please select your gender."); 
        return false; 
    }

    if (address.value == "") { 
        window.alert("Please enter your address."); 
        address.focus(); 
        return false; 
    } 

    if (dob.value == "") { 
        window.alert("Please enter your date of birth."); 
        dob.focus(); 
        return false; 
    }

    for(var i=0;i<game.length;i++) {
        console.log(game[i]);
        if(game[i].checked==true) {
            flag=1;
            break;
        }
    }
    if(flag==0) {
        window.alert("Please select game.");
        return false;
    }  

    if (married.value == "") { 
        window.alert("Please select your marital status."); 
        return false; 
    }

    if (agree.checked == false) { 
        window.alert("Please accept agreement.");  
        return false; 
    }
    return true; 
}