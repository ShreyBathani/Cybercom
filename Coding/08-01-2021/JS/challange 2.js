//Challange 2

//assigning value to variables
var scoreJohn = [89,120,103]; 
var scoreMike = [116,94,123];
var scoreMary = [97,134,105];

//Average
var avgJohn = (scoreJohn[0] + scoreJohn[1] + scoreJohn[2])/3;
var avgMike = (scoreMike[0] + scoreMike[1] + scoreMike[2])/3;
var avgMary = (scoreMary[0] + scoreMary[1] + scoreMary[2])/3;

//Winner
if(avgJohn>avgMike && avgJohn>avgMary){
    console.log("John wins the match with "+ avgJohn +" points.");
}
else if(avgMike>avgMary && avgMike>avgJohn){
    console.log("Mike wins the match with "+ avgMike +" points.");
}
else if(avgMary>avgMike && avgMary>avgJohn){
    console.log("Mary wins the match with "+ avgMary +" points.");
}
else{
    if(avgJohn == avgMike && avgJohn == avgMary){
        console.log("Draw between all teams.");
    }
    else{
        if(avgJohn == avgMike){console.log("Draw between John's & Mike's team with "+ avgJohn +" points.");}
        else if(avgJohn == avgMary){console.log("Draw between John's & Mary's team with "+ avgJohn +" points.");}
        else{console.log("Draw between Mike's & Mary's team with "+ avgMike +" points.");}
    }
}