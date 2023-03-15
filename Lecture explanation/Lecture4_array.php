<?php

//Indexed arrays - Arrays with a numeric index
$colors = array("red", "blue", "black");

echo $colors[0] . "<br>";

$arr_length = count($colors);

echo $arr_length . "<br>";

echo "<br>----------------------------------<br>";
foreach ($colors as $value) {
    echo $value;
    echo "<br>";
}
echo "<br>----------------------------------<br>";

// sort() -> ascending , rsort() -> descending

sort($colors);
print_r($colors);
echo "<br>";


$ccc = array_shift($colors);
print_r($colors);
echo "<br>";

array_unshift($colors, "black");
print_r($colors);

//array_shift() , array_unshift() ,array_pop() , array_push()
echo "<br>----------------------------------<br>";

//Associative arrays - Arrays with named keys
$age = array("Alaa"=>"23", "Aya"=>"21", "Amal"=>"30");
echo "Alaa is " . $age['Alaa'] . " years old.<br>";


foreach($age as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
  }
  
  // asort() , arsort() -> value
 // ksort() , krsort()  -> key

  echo "<br>----------------------------------<br>";

//Multidimensional arrays - Arrays containing one or more arrays

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("KIA",23,10),
    
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo "<br>----------------------------------<br>";





// $arr1 = array("1", "2");
// $arr2 = array("3", "4");
// $result = array_merge($arr1, $arr2);
// print_r($result);




























// $array = array('key1' => 'value1', 'key2' => 'value2'); 

// $keys = array_keys($array);

// for($i=0; $i < count($keys); ++$i) {
//     echo $keys[$i] . ' ' . $array[$keys[$i]] . "\n";
// }

?>