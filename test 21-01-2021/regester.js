function check(){
    if(localStorage.getItem('admindata')){
        alert("Admin Already Registered!!");
        document.getElementById("register").disabled = true; 
    }
}
var admindata = [];
function doregister(){
    var name=document.regform.name.value;
    var email=document.regform.email.value;
    var password=document.regform.password.value;
    var repassword=document.regform.repassword.value;
    var city=document.regform.city.value;
    var state=document.regform.state.value;
    var terms = document.regform.condition.checked;
    //console.log(name, email,password, repassword,city,state,terms);
    if (name==null || name=="" || email==null || email==""|| password==null || password=="" 
    ||repassword==null || repassword=="" || city==null || city==""|| state==null || state=="" || terms == false){  
        alert("Please fill all field"); 
    }
    else if(password !== repassword){
        alert("Password doesn't match"); 
    }
    else if(localStorage.getItem('admindata')){
        alert("Admin Already Registered!!"); 
    }
    else {
        var admin = {
            name : name,
            email : email,
            password: password,
            city: city,
            state: state,
        }
        admindata.push(admin);
        console.log(admindata);
    
        localStorage.setItem('admindata', JSON.stringify(admindata));
    }
}