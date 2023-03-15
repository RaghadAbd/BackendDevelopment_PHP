<?php
/* :: Question 1
Declare indexed array (colors):
-	Get the length of this array and print it.
-	Delete the first element and print array using “print-r”.
-	Add element at the end of array and print array using “print-r”.
*/ 

$colors = array("red", "green", "blue");

$arrLength = count($colors);
echo $arrLength . "<br>";

echo "<br><br>";

$remove = array_shift($colors);  
print_r($colors);  

echo "<br><br>";

array_push($colors,"yellow");
print_r($colors);

echo "<br>----------------------------------<br>";


/*:: Question 2
Declare associative array (key= name, value = age):
-	Print the content of array using foreach.
-	Sort array according to the value and print array using “print-r”.
-	Sort array according to the key and print array using “print-r”.
*/ 

$array = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($array as $a => $b) {
    echo "Name: " . $a . ", Age: " . $b;
    echo "<br>";
  }
echo "<br><br>";

arsort($array);
print_r($array);

echo "<br><br>";

ksort($array);
print_r($array);

echo "<br>----------------------------------<br>";


/*:: Question 3
Declare multidimensional array (std (ID, name, GPA)) at least 3 students:
-	Print the first element in the first array.
-	Print the last element in the third array.

 */

 $std = array (
    array(1,"Ahmed",90),
    array(2,"Ali",80),
    array(3,"samar",70),
  );

  echo $std[0][0];
  echo "<br><br>";
  echo $std[2][2];

  echo "<br>----------------------------------<br>";


/*
Function Activity
-	Function takes two parameter and calculate( + - * /) using echo 
*/ 
function calculate(int $x , int $y){
    echo $x + $y ."<br>";
    echo $x - $y ."<br>";
    echo $x * $y ."<br>";
    echo $x / $y ."<br>";
}
calculate(10 , 5);

echo "<br>----------------------------------<br>";


/*Function takes two parameter fname and lName  and return the full name*/
function FullName($fname , $lName){
    return $fname." ".$lName;
}
echo FullName("Ahmed","Ali");

?>