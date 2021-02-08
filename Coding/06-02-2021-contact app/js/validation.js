let flag = 0;
function setValidationResponse() {
    flag = 1;
	let emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    let nameRegex = /^[A-Za-z0-9 ]+$/;
    let phoneRegex = /^[0-9]{10}$/;
	
	let name = document.getElementById("name").value;
	let email = document.getElementById("email").value;
	let phone = document.getElementById("phone").value;
	let title = document.getElementById("title").value;
    let created = document.getElementById("created").value;
	
	if (name == "") {
		markAsInvalid("name", "required");
	} else if(!nameRegex.test(name)) {
		markAsInvalid("name", "invalid");
	} else {
		markAsValid("name");
	}
	
	if (email == "") {
		markAsInvalid("email", "required");
	} else if(!emailRegex.test(email)) {
		markAsInvalid("email", "invalid");
	} else {
		markAsValid("email");
	}
	
	if (phone == "") {
		markAsInvalid("phone", "required");
	} else if(!phoneRegex.test(phone)) {
		markAsInvalid("phone", "invalid");
	} else {
		markAsValid("phone");
	}
	
	if (title == "") {
		markAsInvalid("title", "required");
	} else {
		markAsValid("title");
	}

    if (created == "") {
		markAsInvalid("created", "required");
	} else {
		markAsValid("created");
	}


    if(flag == 0){
        return false;
    }
    else{
        return true;
    }
    
}

function markAsValid(id) {
    document.getElementById(id+"-info").innerText = "";
}

function markAsInvalid(id, feedback) {
	document.getElementById(id+"-info").innerText = feedback;
    flag = 0;
}

// for value of created time
/* (function(){
    let created = document.getElementById("created");
    let d = new Date();
    let datetime = "";
    let month = d.getMonth()+1;
    if(month<10){
        month = "0".concat(month.toString());
    }else{month.toString();}
    
    let date = d.getDate();
    if(date<10){
        date = "0".concat(date.toString());
    }else{date.toString();}

    let hour = d.getHours();
    if(hour<10){
        hour = "0".concat(hour.toString());
    }else{hour.toString();}

    let minute = d.getMinutes();
    if(minute<10){
        minute = "0".concat(minute.toString());
    }else{minute.toString();}

    let seconds = d.getSeconds();
    if(seconds<10){
        seconds = "0".concat(seconds.toString());
    }else{seconds.toString();}
    
    datetime = d.getFullYear().toString().concat('-',month,'-',date,'T',hour,':',minute,':',seconds);
    //datetime += d.getMonth();
    created.value = datetime;
})(); */