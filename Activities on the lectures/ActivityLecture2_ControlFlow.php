<?php
/*
echo "<select>";
for($i=2000;$i<=2023;$i++){
    echo"<option>$i</option>";
}
echo "</select><br>";
*/


/*
//Q1
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
*/

//Q2 
/*
for($i=0;$i<=10;$i++){
    if($i==5){
        echo "break<br>";
        break;
        //continue;
    }
    echo"$i<br>";
}

*/

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