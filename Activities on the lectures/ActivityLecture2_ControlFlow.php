<?php

//drop down select box from the year 2000 to the year 2023
echo "<select>";
for($i=2000;$i<=2023;$i++){
    echo"<option>$i</option>";
}
echo "</select><br>";

echo "<br>----------------------------------<br>";

//Find Largest Number among three Numbers
$x=10;
$y= 5;
$z=3;

if($x>$y && $x>$z){
    echo $x;
}
else if($y>$x && $y>$z){
      echo $y;
}
else{
      echo $z;
  }

echo "<br>----------------------------------<br>";

//A counter from 0 to 10, use forloop ,that stops when it reaches 5

for($i=0;$i<=10;$i++){
    if($i==5){
        echo "break<br>";
        break;
        //continue;
    }
    echo"$i<br>";
}

echo "<br>----------------------------------<br>";

//A counter from 0 to 10, use forloop , When it gets to 5 it print "Loop go to next iteration at i=5<br>" and then keeps counting.
//Using continue and while

$i=0;
    while($i<10){
        if($i==5) {
            $i++;
            echo "Loop go to next iteration at i=5<br>";
            continue; 
    }     
echo"$i<br>";
        $i++;
}


?>
