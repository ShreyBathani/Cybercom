
var admindata = JSON.parse(localStorage.getItem('admindata')) || [];
var sessiondata = JSON.parse(localStorage.getItem('sessiondata')) || [];
function dologin(){
    var email=document.loginform.email.value;
    var password=document.loginform.password.value;
    if (email==null || email==""|| password==null || password==""){  
        alert("Please fill all field"); 
    }
    else if(sessionStorage.getItem('admin-loggedin')){
        alert("Admin already logged-in!!");
    }
    else if(email === admindata[0]['email'] && password === admindata[0]['password']){
        localStorage.setItem('admin-loggedin',true);
        localStorage.setItem('username',admindata[0]['name']);
        var user = {
            username: admindata[0]['name'],
            loginTime: Date(),
            logoutTime: '',
        }
        sessiondata.push(user);
        localStorage.setItem('sessiondata', JSON.stringify(sessiondata));
        window.location.href="dashboard.html";
    }
    else{ 
        alert("Please fill correct data");
    }
}

function redirect(){
    window.location.href="register.html";
}
