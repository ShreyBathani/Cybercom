function validate() { 
    var name = document.forms["userdata"]["name"]; 
    var password = document.forms["userdata"]["password"]; 
    var address = document.forms["userdata"]["address"]; 
    var game = document.forms["userdata"]['game[]'];
    var gender = document.forms["userdata"]["gender"]; 
    var age = document.forms["userdata"]["age"]; 
    var file = document.forms["userdata"]["file"]; 

    var nameerr = document.getElementById('nameerr');
    var passworderr = document.getElementById('passworderr');
    var addresserr = document.getElementById('addresserr');
    var gameerr = document.getElementById('gameerr');
    var gendererr = document.getElementById('gendererr');
    var ageerr = document.getElementById('ageerr');
    var fileerr = document.getElementById('fileerr');

    
    nameerr.textContent = '';
    if (name.value.trim() == "" || name.value.trim() == null) {
        nameerr.textContent = 'This field is required'; 
        name.focus(); 
        return false; 
    }
    else if(!name.value.match(/^[A-Za-z ]+$/)){
        nameerr.textContent = 'Only letter and whitespace are alowed'; 
        name.focus(); 
        return false;
    } 

    passworderr.textContent = '';
    if (password.value.trim() == "" || password.value.trim() == null) { 
        passworderr.textContent = 'This field is required'; 
        password.focus(); 
        return false; 
    }
    else if(password.value.length < 6){
        passworderr.textContent = 'Password must be at least 6 characters long'; 
        password.focus(); 
        return false;
    }

    addresserr.textContent = '';
    if (address.value.trim() == "" || address.value.trim() == null) { 
        addresserr.textContent = 'This field is required'; 
        address.focus(); 
        return false; 
    } 

    var flag = 0;
    gameerr.textContent = '';
    for(var i=0;i<game.length;i++) {
        console.log(game[i]);
        if(game[i].checked==true) {
            flag=1;
            break;
        }
    }
    if(flag==0) {
        gameerr.textContent = 'This field is required';
        return false;
    } 

    gendererr.textContent = '';
    if (gender.value.trim() == "" || gender.value.trim() == null) { 
        gendererr.textContent = 'This field is required'; 
        return false; 
    } 

    ageerr.textContent = '';
    if (age.selectedIndex < 1) { 
        ageerr.textContent = 'This field is required'; 
        age.focus(); 
        return false; 
    } 

    fileerr.textContent = '';
    if (file.value.trim() == "" || file.value.trim() == null) {
        fileerr.textContent = 'This field is required';  
        return false; 
    }
    else if(!file.value.match(/(\.jpeg|\.jpg|\.png)$/i)){
        fileerr.textContent = 'Only .jpg , .jpeg , .png file allowed';  
        return false;
    }
    return true; 
}