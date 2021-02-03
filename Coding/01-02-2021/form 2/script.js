function validate() { 
    var fname = document.forms["userdata"]["fname"]; 
    var password = document.forms["userdata"]["password"];
    var gender = document.forms["userdata"]["gender"]; 
    var address = document.forms["userdata"]["address"]; 
    var dob = document.forms["userdata"]["dob"]; 
    var game = document.forms["userdata"]['game[]'];
    var married = document.forms["userdata"]["married"];
    var agree = document.forms["userdata"]['agree'];

    var fnameerr = document.getElementById('fnameerr');
    var passworderr = document.getElementById('passworderr');
    var gendererr = document.getElementById('gendererr');
    var addresserr = document.getElementById('addresserr');
    var doberr = document.getElementById('doberr');
    var gameerr = document.getElementById('gameerr');
    var marriederr = document.getElementById('marriederr');
    var agreeerr = document.getElementById('agreeerr');
     

    fnameerr.textContent = '';
    if (fname.value.trim() == "" || fname.value.trim() == null) {
        fnameerr.textContent = 'This field is required'; 
        fname.focus(); 
        return false; 
    }
    else if(!fname.value.match(/^[A-Za-z ]+$/)){
        fnameerr.textContent = 'Only letter and whitespace are alowed'; 
        fname.focus(); 
        return false;
    } 

    passworderr.textContent = '';
    if (password.value.trim() == "" || password.value.trim() == null) { 
        passworderr.textContent = 'This field is required'; 
        password.focus(); 
        return false; 
    }
    else if(password.value.length < 6){
        passworderr.textContent = 'At least 6 characters long'; 
        password.focus(); 
        return false;
    }

    gendererr.textContent = '';
    if (gender.value.trim() == "" || gender.value.trim() == null) { 
        gendererr.textContent = 'This field is required'; 
        return false; 
    }

    addresserr.textContent = '';
    if (address.value.trim() == "" || address.value.trim() == null) { 
        addresserr.textContent = 'This field is required'; 
        address.focus(); 
        return false; 
    }

    doberr.textContent = '';
    if (dob.value.trim() == "" || dob.value.trim() == null) { 
        doberr.textContent = 'This field is required'; 
        dob.focus(); 
        return false; 
    }

    var flag = 0;
    gameerr.textContent = '';
    for(var i=0;i<game.length;i++) {
        if(game[i].checked==true) {
            flag=1;
            break;
        }
    }
    if(flag==0) {
        gameerr.textContent = 'This field is required';
        return false;
    }

    marriederr.textContent = '';
    if (married.value.trim() == "" || married.value.trim() == null) { 
        marriederr.textContent = 'This field is required'; 
        return false; 
    }

    agreeerr.textContent = '';
    if (agree.checked == false) { 
        agreeerr.textContent = "Please accept Terms.";  
        return false; 
    }
    
    return true; 
}