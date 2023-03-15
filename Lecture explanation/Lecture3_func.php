<?php

//Define a function that prints "This is a function".
function func(){
    echo"This is Function <br>";
}
//function call
func();

echo "-----------------------------------------------";

//Function takes two parameter and calculate( + ) using echo 
function sumFunc(int $x , int $y){
    echo $x + $y ."<br>";
}
sumFunc(3,7);

echo "-----------------------------------------------";

//Function takes two parameters and returns their sum
function sumFunc2 ($x , $y){
    $z = $x + $y;
    return $z;
}
echo sumFunc2(2,2);




?>
