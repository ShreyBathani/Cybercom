//Challlange 4

//creating object and method
var mark = {
    firstName: "Mark", 
    lastName: "Walker", 
    mass: 74.84, 
    height: 1.88,
    calcBmi : function(){
        this.bmi = this.mass/(this.height**2);
        return this.bmi;
    }
}

var john = {
    firstName: "John", 
    lastName: "Smith",
    mass: 83.91, 
    height: 1.83,
}

//Assigning method to john
john.calcBmi = mark.calcBmi;

//Calculating Bmi
console.log("Bmi of Mark: " + mark.calcBmi());
console.log("Bmi of John: " + john.calcBmi());
//console.log(mark, john);

//comparing BMI
if(mark.bmi === john.bmi){
    console.log(mark.firstName +" "+ mark.lastName +" & " +john.firstName + " " + john.lastName + " has same BMI: "+ mark.bmi);
}
else if(mark.bmi > john.bmi){
    console.log(mark.firstName +" "+ mark.lastName  + " has higher BMI: "+ mark.bmi);
}
else{
    console.log(john.firstName +" "+ john.lastName  + " has higher BMI: "+ john.bmi);
}