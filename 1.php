<?php

//sol-1
//Abdelrahman-mohamed-mon-1


 $array = ['1','2','3','4','5','6','7','8','9'];

 echo "The Min. number is $array[0] <br>";
 echo "The Max. number is $array[8] <br>";

echo "<hr>";

//sol-2

$var = 5;
echo $var ."<br>";
if($var ==5){
    echo 'Five';
}
//switch case - match case
echo "<hr>";

//sol-3
$i=1;
if($i ==1){
    echo "* <br>";
}
$i=2;
if($i ==2){
    echo "** <br>";
}
$i=3;
if($i ==3){
    echo "*** <br>";
}
$i=4;
if($i ==4){
    echo "**** <br>";
}
$i=5;
if($i ==5){
    echo "***** <br>";
}
$i=5;
if($i ==5){
    echo "***** <br>";
}
$i=4;
if($i ==4){
    echo "**** <br>";
}
$i=3;
if($i ==3){
    echo "*** <br>";
}
$i=2;
if($i ==2){
    echo "** <br>";
}
$i=1;
if($i ==1){
    echo "* <br>";
}

echo "<hr>";

//sol-4

$result = "";

for($i=1;$i<13;$i++){
    echo"<span style=display:inline-block;background:#eee;padding:10px;margin:8px;>";
for($j=1;$j<13;$j++){
    $result = $i * $j;
    echo $i . "x" . $j . "=" . $result . "<br>";
}
    echo "</span>";
}

echo "<hr>";

//sol-7

$x = 3 ; 
$y=$x++; // Variable y = 4    ($x = 4)
$y+= ++$x;  //($y+=) y=8          ($x = 5)
 
if ($y == 7) {
 	$x++;               //post increment
 	echo $x ."<br>";
 }
else if ($y == 8){      //y will equal to 8
 	$x--;               //pre-increment
 	echo $x ."<br>";    
	}
else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
}
else { 
	$x= 0;
	echo $x ."<br>"; }

echo "<hr>";

