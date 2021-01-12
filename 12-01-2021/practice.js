//Hoisting
var x = 12;
console.log(x);
function abc(){
    //console.log(x);
    var x=2;
}
abc();

//Scoping
var a ="Hii! ";
first();
function first(){
    var b = "Hello! ";
    second();
    
    function second(){
        var c = "I'm ";
        third(b,c);
    }
}
function third(b,c){
    var d = "John.";
    console.log(a+b+c+d);
}

//this pointing to window
console.log(this);

//this pointing to object, object & method
var person1 = {
    firstName: "John",
    lastName : "Walker",
    fullName : function() {
      return this.firstName + " " + this.lastName;
    }
};
console.log(person1.fullName());

var person2 = {
    firstName: "Mark",
    lastName : "Smith",
    concateName : function() {
      this.fullname = this.firstName + this.lastName;
    }
};
person2.concateName();
console.log(person2);


