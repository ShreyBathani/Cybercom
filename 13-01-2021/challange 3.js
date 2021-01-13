//Challange 3

//assigning value to variables
var bills = [124,48,268];
var tip = [];
var paidamt = [];
var i;

//fumnction
function tipcal(a,b){
    return a*b;
}

//loop
for(i=0; i<bills.length; i++){
    if(bills[i]<=50){
        tip[i] = tipcal(bills[i],0.2)
        paidamt[i] = bills[i] + tip[i];
        console.log("Restaurant: " + (i+1) + " Tip: " + tip[i] +" Paid Amount: " + paidamt[i]);
    }
    else if(bills[i]>50 && bills[i]<=200){
        tip[i] = tipcal(bills[i],0.15)
        paidamt[i] = bills[i] + tip[i];
        console.log("Restaurant: " + (i+1) + " Tip: " + tip[i] +" Paid Amount: " + paidamt[i]);
    }
    else{
        tip[i] = tipcal(bills[i],0.1)
        paidamt[i] = bills[i] + tip[i];
        console.log("Restaurant: " + (i+1) + " Tip: " + tip[i] +" Paid Amount: " + paidamt[i]);
    }
}


