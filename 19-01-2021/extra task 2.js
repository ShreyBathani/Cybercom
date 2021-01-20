//Store object in local storage
function object(name, age, email, telephone){
    this.name= name;
    this.age = age;
    this.email = email;
    this.telephone = telephone;
}

var john = new object('John', 22, 'abc@gmail.com', 9988776655);
var mark = new object('Mark', 25, 'pqr@gmail.com', 8877923451);
var sally = new object('Sally', 32, 'xyz@gmail.com', 7784024525);

var objarr = [john, mark, sally];
console.log(objarr);

localStorage.setItem('objarr',JSON.stringify(objarr));

var arr = JSON.parse(localStorage.getItem('objarr'));
console.log(arr);

document.write("<table border='1'>");
document.write("<tr><th>Name</th><th>Age</th><th>Email</th><th>Telephone</th></tr>");
 
for(var i =0; i < arr.length ; i++){
    document.write("<tr>");
    for(key in arr[0]){
        document.write("<td>"+arr[i][key]+"</td>");
    }
    document.write("</tr>");
}
document.write("</table>");

