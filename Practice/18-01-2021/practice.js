//Arrow Function
{const years = [1980, 1972, 1962, 1940];

let ages = years.map(el => 2021 - el);
console.log(ages);

ages = years.map((el, index) => `Age element ${index+1}: ${2021 - el}`);
console.log(ages);

ages = years.map((el, index) => {
    const year = new Date().getFullYear();
    const age = year - el;
    return `Age element ${index+1}: ${age}`;
});
console.log(ages);
}


//Destructuring
{
function calcAgeRetire (year){
    const age = new Date().getFullYear() - year;
    return [age, 65 - age];
}

const [age, retirement] = calcAgeRetire(1980);
console.log(age);
console.log(retirement);

}


//Array in ES6
{
var ages = [17,11,14,20,9,35];
console.log(ages.findIndex(cur => cur>=18));
console.log(ages.find(cur => cur>=18));
}


//other practice
function a(){
    console.log(this);  //Window object
    function b(){
        console.log(this);  //Window object
    }
    b();
}
a();

var A = {x:'abc', y:'xyz'}
for (b in A){
    console.log(b);
}

for (b in A){
    console.log(A[b]);
}
console.log(A);

/*for (b of A){
    console.log(b);
}

for (b of A){
    console.log(b);
}
error: A is not iterable 

*/
