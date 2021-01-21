
var userdata = JSON.parse(localStorage.getItem('userdata')) || [];

document.getElementById('username').innerHTML += username; 

function storeuserdata(){
    var name=document.userdata.name.value;
    var email=document.userdata.email.value;
    var password=document.userdata.password.value;
    var dob=document.userdata.dob.value;
    var year = new Date().getFullYear();
    var age = year - Number(dob.substr(0,4));
    if (name==null || name==""||email==null || email==""|| password==null || password==""|| dob==null || dob==""){  
        alert("Please fill all field"); 
    }
    else{
        var user = {
            name : name,
            email : email,
            password: password,
            dob: dob,
            age: age,
        }
        userdata.push(user);
        //console.log(userdata);
        
        localStorage.setItem('userdata', JSON.stringify(userdata));
        window.location.href="user.html";
    }
}
userdata = JSON.parse(localStorage.getItem('userdata'));

var userel = document.getElementById('usertable');
var temp = "<table> <tr><th>Name</th><th>Email</th><th>Password</th><th>Birthday</th><th>Age</th><th>Action</th></tr>"; 
//var temp ="";
for(var i = 0; i < userdata.length ; i++){
    temp += "<tr>";
    for(key in userdata[i]){
        temp += "<td>"+userdata[i][key]+"</td>";
        //userel.innerHTML += temp;
    }
    temp += "<td><span onclick='edit("+i+")'>Edit</span><span onclick='deluser("+i+")'>Delete</span></td></tr>";
}
temp += "</table>";
userel.innerHTML = temp;

function edit(index){
    userdata = JSON.parse(localStorage.getItem('userdata'));
    tempuser = userdata[index];
    document.userdata.name.value = tempuser.name;
    document.userdata.email.value = tempuser.email;
    document.userdata.password.value = tempuser.password;
    document.userdata.dob.value = tempuser.dob;

    document.getElementById('user').value = "Update User";

    document.getElementById('user').onclick = "edituser("+index+")";
}
function edituser(index){
    userdata = JSON.parse(localStorage.getItem('userdata'));
    tempuser = userdata[index];
    var name=document.userdata.name.value;
    var email=document.userdata.email.value;
    var password=document.userdata.password.value;
    var dob=document.userdata.dob.value;
    var year = new Date().getFullYear();
    var age = year - Number(dob.substr(0,4));
    if (name==null || name==""||email==null || email==""|| password==null || password==""|| dob==null || dob==""){  
        alert("Please fill all field"); 
    }
    else{
        var user = {
            name : name,
            email : email,
            password: password,
            dob: dob,
            age: age,
        }
        userdata[index]=user;
        //console.log(userdata);
        
        localStorage.setItem('userdata', JSON.stringify(userdata));
        window.location.href="user.html";
    }
}

function deluser(index){
    userdata = JSON.parse(localStorage.getItem('userdata'));
    userdata.splice(index,1)
    localStorage.setItem('userdata', JSON.stringify(userdata));
    window.location.href="user.html";
}





