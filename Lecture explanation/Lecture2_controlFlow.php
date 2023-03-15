<?php
echo"<center><b>***Control Flow***</b></center>";

//if..else
$x = 10;
if ($x > 0) {
    echo "$x is greater than 0 <br><br>";
}elseif($x < 0) {
    echo "0 is greater than $x <br><br>";
}else{
    echo " x = 0 <br><br>";
}


$val =($x > 0 ? "$x is greater than 0" : "0 is greater $x");
echo "$val <br><br>";






// // //switch
$x = 2;
switch ($x) {
    case 1:
        print("Choice is 1");
        break;
    case 2:
        print("Choice is 2");
        break;
    case 3:
        print("Choice is 3");
        break;
    default:
        print("Choice other than 1, 2 and 3");
        
}
  echo "<br><br>";






// //for loop
for ($i=0; $i <10 ; $i++) { 
    echo ("i = ".$i.",");
}
echo "<br><br>";







// // //while loop

$a = 1;
while ($a <= 10) {
    echo ("a = ".$a.",");
    $a++;
}
echo "<br><br>";






// // //do..while loop
$b = 1;
do {
    echo ("b = ".$b.",");
    $b++;
} while ($b <= 10);

  echo "<br><br>";



// // //break & continue

for ($i=0; $i <10 ; $i++) { 
    if ($i == 5) {
        echo "break";
        break;
    }
    echo ("i = ".$i.",");
 }
  echo "<br><br>";

for ($i=0; $i <10 ; $i++) { 
    if ($i == 5) {
        echo "continue  ";
        continue;
    }
    echo ("i = ".$i.",");
}
echo "<br><br>";







 //foreach loop (with array)

$names = array("Alaa","Aya","Israa");
foreach ($names as $value) {
    echo "<br><br> Your name is $value .";
}
echo "<br><br>";









//---------------------------------------------------------



echo "<select>";
for ($i = 2000; $i <= 2023 ; $i++){
    echo "<option>$i</option>";
}
echo "</select><br>";

























?>
