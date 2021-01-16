//Function returning Function

function decision(age){
    if(age=>18){
        return function(name){
            console.log( name + ", You can vote in election.");
        }
    }
    else{
        return function(name){
            console.log(name + ", You can't vote in election.");
        }
    }
}

var agejohn = decision(25);
agejohn('John');

var agesally = decision(15);
agesally('Sally');

decision(36)('Mark');


//Immediately Invoked Function Expression(IIFE)
(function(){
    var score = Math.random() * 10;
    console.log(score>=5);
})();


//closure
function a(){
    var a = 10;
    return function(b){
        console.log(a +' + '+ b + ' = ' + (a+b));
    }
}
var addition = a();
addition(5);


//First example using closure
function decision(age){
    return function(name){
        if(age=>18){
            console.log( name + ", You can vote in election.");
        }
        else{
            console.log(name + ", You can't vote in election.");
        }
    }
    
}
var agejohn = decision(25);
agejohn('John');

var agesally = decision(15);
agesally('Sally');

decision(36)('Mark');


//Closure with IIFE 
var add = (function () {
    var cnt = 0;
    return function () {cnt += 1; console.log('Count: '+cnt)}
})();
  
add();
add();
add();

//call(), apply() & bind()

var john = {
    firstName:"John",
    lastName: "Smith",
    fullName: function(city, country) {
        return console.log(this.firstName + " " + this.lastName + "," + city + "," + country);
    }
}
var emily = {
    firstName:"Emily",
    lastName: "Bond"
}
john.fullName("Oslo", "Norway");
john.fullName.call(emily, "Toronto", "Canada");
var johnCanada = john.fullName.bind(john, 'Toronto', 'Canada');
johnCanada();
var emilyNorway = john.fullName.bind(emily, 'Oslo', 'Norway');
emilyNorway();


