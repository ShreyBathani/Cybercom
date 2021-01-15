//Function Constructur
function Person(first, last, yearOb) {
    this.firstName = first;
    this.lastName = last;
    this.yearOb = yearOb;
}

Person.prototype.calcAge = function(){
    console.log(2021 - this.yearOb);
}

var john = new Person("John", "Smith", 1980);
var sally = new Person("Sally", "Rally", 1996);

john.calcAge();
sally.calcAge();


//object.create() example
prototypeObject = {
	fullName: function(){
		return this.firstName + " " + this.lastName		
	}
}
var person = Object.create(prototypeObject)

console.log(person)

person.firstName = "John";
person.lastName = "Smith";

person.fullName()


//First Class function
function sayHello() {
    return "Hello ";
}
function greeting(helloMessage, name) {
    console.log(helloMessage() + name);
}

greeting(sayHello, "World!!!");