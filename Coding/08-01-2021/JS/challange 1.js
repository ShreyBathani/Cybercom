//Challlange 1

//assigning value to variables
var massMark = 74.84, heightMark = 1.88, bmiMark;
var massJohn = 83.91, heightJohn = 1.83, bmiJohn;

//BMI claculation
bmiMark = massMark/(heightMark**2);
bmiJohn = massJohn/(heightJohn**2);

console.log("BMI of Mark: " + bmiMark)
console.log("BMI of John: " + bmiJohn)

//comparison
bmiCompare = bmiMark > bmiJohn;

console.log("Is Mark's BMI higher than John's? " + bmiCompare);