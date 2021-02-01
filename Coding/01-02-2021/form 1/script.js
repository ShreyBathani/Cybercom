function validate() { 
    var name = document.forms["userdata"]["name"]; 
    var password = document.forms["userdata"]["password"]; 
    var address = document.forms["userdata"]["address"]; 
    var game = document.forms["userdata"]['game[]'];
    var gender = document.forms["userdata"]["gender"]; 
    var age = document.forms["userdata"]["age"]; 
    var file = document.forms["userdata"]["file"]; 
    var flag = 0;
    if (name.value == "") { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 

    if (password.value == "") { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return false; 
    }

    if (address.value == "") { 
        window.alert("Please enter your address."); 
        address.focus(); 
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

    if (gender.value == "") { 
        window.alert("Please enter your gender."); 
        return false; 
    } 

    if (age.selectedIndex < 1) { 
        alert("Please select your age."); 
        age.focus(); 
        return false; 
    } 

    if (file.value == "") { 
        window.alert("Please select file."); 
        file.focus(); 
        return false; 
    }
    return true; 
}