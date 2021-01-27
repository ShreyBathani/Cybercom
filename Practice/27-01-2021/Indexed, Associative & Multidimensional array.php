<?php

//Array

//Indexed Array
echo "<h1>Array</h1>";
$fruits = array('Apple','Banana','Orange');
//echo $fruits;     //Warning: Array to string conversion
$fruits[3] = 'Watermalon';
print_r($fruits);


//Associative Array
echo "<br><h1>Associative Array</h1>";
$mark = array('firstname'=>'Mark','lastname'=>'Smith','age'=>'32');
print_r($mark);


//Multidimensional Array
echo "<br><h1>Multidimensional Array</h1>";
$person = array('person1'=>$mark,'person2'=>array('firstname'=>'John','lastname'=>'Doe','age'=>'29'));
print_r($person);
echo '<br>';
echo $person['person2']['firstname'].' '.$person['person2']['lastname'];


//foreach loop
echo "<br><h1>foreach loop</h1>";
foreach($person as $num => $inner_arr){
    echo "<br><b>" . $num . ":</b>";
    foreach($inner_arr as $key => $val){
        echo "<br>" . $key . ": ". $val;
    }
}











?>