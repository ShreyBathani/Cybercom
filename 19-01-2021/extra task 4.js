var fname, email, dob;
var arr = JSON.parse(localStorage.getItem('formdata')) || [];
function formdata(){
    fname = document.getElementById('name').value;
    email = document.getElementById('email').value;
    dob = document.getElementById('dob').value;

    var obj = {
        name : fname,
        email : email,
        dob : dob,
    }

    arr.push(obj);
    console.log(arr);

    localStorage.setItem('formdata', JSON.stringify(arr));
    window.open("view.html");
    //window.location.href("view.html");
}
