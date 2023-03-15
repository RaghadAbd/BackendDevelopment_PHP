<?php

//Indexed arrays - Arrays with a numeric index
$colors = array("red", "blue", "black");

//Prints the first element in the array
echo $colors[0] . "<br>";

//Get the number of elements of the array
$arr_length = count($colors);

echo $arr_length . "<br>";

echo "<br>----------------------------------<br>";

//Print array elements using foreach
foreach ($colors as $value) {
    echo $value;
    echo "<br>";
}

echo "<br>----------------------------------<br>";

// sort() -> ascending , rsort() -> descending

//Sort array & print it using “print-r”.
sort($colors);
print_r($colors);
echo "<br>";

//Delete the first element and print array using “print-r”.
$ccc = array_shift($colors);
print_r($colors);
echo "<br>";

//inser elements at the first of the array and print array using “print-r”.
array_unshift($colors, "black");
print_r($colors);

/*
array_shift() function delete one or more element to the first of array  ,
array_unshift() function insert one element to the first of array ,
array_pop() function inserts one or more elements to the end of an array ,
array_push()function delete one or more elements to the end of an array
*/
echo "<br>----------------------------------<br>";

//Associative arrays - Arrays with named keys
$age = array("Alaa"=>"23", "Aya"=>"21", "Amal"=>"30");

//Print the age of the second entry of the array
echo "Alaa is " . $age['Alaa'] . " years old.<br>";

//Print the array using Foreach
foreach($age as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
  }
//Sort array according to value or key
// asort() , arsort() -> value
// ksort() , krsort()  -> key

  echo "<br>----------------------------------<br>";

//Multidimensional arrays - Arrays containing one or more arrays

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("KIA",23,10),  
);

//Print the array entries $array [array number starts from 0][entries number starts from 0]
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";

echo "<br>----------------------------------<br>";

//array_merge();function merges one or more arrays into one array. 

$arr1 = array("1", "2");
$arr2 = array("3", "4");
$result = array_merge($arr1, $arr2);
print_r($result);


echo "<br>----------------------------------<br>";
//array_keys();function returns an array containing the keys. Syntax: array_keys(array, value, strict).

$array = array('key1' => 'value1', 'key2' => 'value2'); 

$keys = array_keys($array);

for($i=0; $i < count($keys); ++$i) {
    echo $keys[$i] . ' ' . $array[$keys[$i]] . "\n";
}

?>
