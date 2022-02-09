<?php

//Tests if the variable meets the series of conditions

$day="Mon";

switch ($day){

    case "Mon":
        echo "Today is Monday, read a book";
        break;
    case "Tue":
        echo "Today is Tuesday, learn JavaScript";
        break;
    case "Wed":
        echo "Today is Wednesday, learn PHP";
        break;
    case "Thur":
        echo "Today is Thursday, Go swimming";
        break;
    default:
        echo "Rest, it's the weekend";
        break;
}

echo "<br>";
echo "<hr>";

echo "<h3>Loops</h3>";



$a = 1;

while ($a<=10){
    $a++;
    echo "The value of a is $a <br>";
}


#do while
echo "<hr>";
$b =1;
do{
    $b++;
    echo "The value of b is $b <br>";
} while($b<=10);



#for loop
echo "<hr>";
for ($c=1;$c<=8;$c++){
    echo "The value of c is $c <br>";
}


# do a loop prints even numbers between 0 and 50
echo "<hr>";
$d =0;
do{
    $d+=2;
    echo "The value of d is $d <br>";
} while($d<50);



#print odd numbers between 0 and 50
echo "<hr>";
for ($e=1;$e<50;$e+=2){
    echo "The value of e is $e <br>";
}


for ($row=1;$row<=7;$row++){
    for ($star=1;$star<$row;$star++){
        echo "*";
    }
    echo "<br>";
}

//non-breaking space
$size = 10;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
}














