//Challlange 6

//Assigning value to variables
var n1 = 0;
var n2 = 1;
var n3, fibo = n1 + ', ' + n2;

//for loop 
for(var i = 0; i <15; i++){
    n3 = n1 + n2;
    n1 = n2;
    n2 = n3;
    fibo +=', '+ n3 ;
}
//Disply Fibonacci series
document.getElementById('fibonacci').innerHTML = fibo;

