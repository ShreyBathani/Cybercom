
//var arr = JSON.parse(localStorage.getItem('formdata')) || [];
function dologin(){
    var email=document.loginform.email.value;
    var password=document.loginform.password.value;
    if (email==null || email==""|| password==null || password==""){  
        alert("Please fill all field"); 
    }
    //else if(sessionStorage.getItem('admin-loggedin')){
    //    alert("Admin Alreadt Loggedin")
    //}
    else if(email === "admin@123.com" && password === "admin123"){
        window.location.href="dashboard.html";
        sessionStorage.setItem('admin-loggedin',true);
    }
    else{ 
        alert("Please fill correct data");
    }
}
function register(){
    window.location.href="register.html";
}
