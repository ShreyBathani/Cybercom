
var admindata = JSON.parse(localStorage.getItem('admindata')) || [];
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
        window.location.href="dashboard.html";
        sessionStorage.setItem('admin-loggedin',true);
    }
    else{ 
        alert("Please fill correct data");
    }
}
function redirect(){
    window.location.href="register.html";
}
