<?php

echo "<h3>Arithmetic Operations</h3>";

$num1 =34; $num2 =45;

//arithmetic operators
$sum =$num1 +$num2;
$sub =$num1-$num2;
$prod=$num1*$num2;
$div=$num2/$num1;
$mod=$num2%$num1;

echo "The sum of $num1 & $num2 is $sum";
echo "<br>";
echo "<br>";
echo "The diff of $num1 & $num2 is $sub";
echo "<br>";
echo "<br>";
echo "The product of $num1 & $num2 is $prod";
echo "<br>";
echo "<br>";
echo "The div of $num1 & $num2 is $div";
echo "<br>";
echo "<br>";
echo "The mod of $num1 & $ num2 is $mod";
echo "<br>";
echo "<br>";

echo "<hr>";

echo "<h3>Assignment Operators</h3>";

$a = 10;

print "$a";
echo "<br>";
echo "<br>";

$a += 10;
print "The new value of a is $a";
echo "<br>";
echo "<br>";

$a *= 10;
print "The new value of a is $a";
echo "<br>";
echo "<br>";

$a -= 10;
print "The new value of a is $a";
echo "<br>";
echo "<br>";

$a /=2;
print "The new value of a is $a";
echo "<br>";
echo "<br>";

$a %= 2;
print "The new value of a is $a";
echo "<br>";
echo "<br>";

echo "<hr>";

echo "<h3>Decrement/Increment Operators</h3>";

$b = 50;

echo "Value of b is";
echo "<br>";
echo "<br>";

$b++;
print "The new value of b is $b";
echo "<br>";
echo "<br>";

$b--;
print "The new value of b is $b";
echo "<br>";
echo "<br>";

--$b;
print "The new value of b is $b";
echo "<br>";
echo "<br>";

echo "<hr>";

echo "<h3>Comparison Operators</h3>";

$age=18;

if($age>18){
    print "You are an adult";
} else{
    print "You are a child";
}

echo "<br>";
echo "<br>";
echo "<hr>";

if($age>18){
    print "You are an adult";
}elseif($age>12){
    print "You are a teenager";
}else{
    print "You are a child";
}

echo "<br>";
echo "<br>";
echo "<hr>";

echo "<h3>Logical Operators</h3>";

if($age>=18 and $age<100){
    print "You are an adult";
}elseif($age>12 and $age<18){
    print "You are a teenager";
}elseif($age>0 and $age<=12){
    print "You are a child";
}
else{
    print "No such age is allowed";
}
echo "<br>";
echo "<br>";
echo "<hr>";
//create an if else php code that grades students

$marks=89;

if($marks<=19 and $marks>=0){
    print "E";
}elseif($marks<=39 and $marks>19){
    print "D";
}elseif($marks<=59 and $marks>39){
    print "C";
}elseif($marks<=79 and $marks>59){
    print "B";
}elseif($marks<=100 and $marks>79){
    print "A";
}else{
    print "No grade";
}

/*
$salary =100000; $house_allowance= "50% of basic salary"; $medical_allowance=20%; $tax= -10%;
*/
echo "<br>";
echo "<br>";
echo "<hr>";
$salary =90000;

$med_all_1 =-20/100; $med_all_2 =-20/100; $med_all_3 =-25/100; $med_all_4=-30/100;
$hou_all_1 =50/100; $hou_all_2 =50/100; $hou_all_3 =25/100; $hou_all_4=30/100;
$tax_all_1 =-10/100; $tax_all_2 =-10/100; $tax_all_3 =-10/100; $tax_all_4=-10/100;


$sum_crit_1=$salary*(-$med_all_1+$hou_all_1+$tax_all_1);
$sum_crit_2=$salary*(-$med_all_2+$hou_all_2+$tax_all_2);
$sum_crit_3=$salary*(-$med_all_3+$hou_all_1+$tax_all_3);


if ($salary<=10000 and $salary>=0){
    print "The net salary is $sum_crit_1";
}elseif ($salary<=20000 and $salary>10000){
    print "The net salary is $sum_crit_2";
}elseif($salary>20000){
    print "The net salary is $sum_crit_3";
}else {
    print "Not in this criteria";
}



