<?php

function func(){

    echo"This is Function <br>";
}
func();

function sumFunc(int $x , int $y){
    echo $x + $y ."<br>";
}
sumFunc(3,7);

function sumFunc2 ($x , $y){
    $z = $x + $y;
    return $z;
}
echo sumFunc2(2,2);
?>