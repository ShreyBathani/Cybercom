//Store object in array
function object(name, age, email, telephone){
    this.name= name;
    this.age = age;
    this.email = email;
    this.telephone = telephone;
}

var john = new object('John', 22, 'abc@gmail.com', 9988776655);
var mark = new object('Mark', 25, 'pqr@gmail.com', 8877923451);
var sally = new object('Sally', 32, 'xyz@gmail.com', 7784024525);

var objarr = [sally, john, mark];
console.log(objarr);

//sort by name
objarr.sort((a,b) => a.name.localeCompare(b.name));
console.log(objarr);

//sort by age
//objarr.sort((a,b) => b.age - a.age);
//console.log(objarr);
