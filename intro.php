<?php


//<?php should end in ?>
#2.Every php statements end with a semi-colon(;)
#3.Is case-sensitive


/* variable
store data

conventions
-variable
-a variable is declared with a dollar sign($)
-a name must start with a letter or an underscore (_),
-can contain alphanumeric(a-z), numbers (0-9)
-cannot contain spaces
*/

$username="";
$_username="MARK";
$user_name="jane";
$username2="Patrick";
$firstName="Keith";

echo "<h3>Introduction to PHP</h3>";

#INTERGER

$a = 3453;

var_dump($a);
echo "<br>";

$b = -90;
var_dump($b);

#Floating Point

echo "<br>";
$c = 1.45890;
var_dump($c);

echo "<br>";
$d = 10.2e3;
var_dump($d);

echo "<br>";

#BOOLEAN

$e=true;
var_dump($e);

echo "<br>";
$f=false;
var_dump($f);

echo "<br>";
#ARRAYS
$colors =array("Red","Green","Yellow");
var_dump($colors);

echo "<br>";
#STRINGS

$grade = "A";
var_dump($grade);
echo "<br>";

echo "<br>";
$sentensi = "The quick brown fox jumped over the lazy dog";

var_dump($sentensi);
echo "<br>";

//length of string
echo "<p> The length of string</p>";
echo strlen($sentensi);
echo "<br>";

//number of words
echo "<p> The number of words</p>";
echo str_word_count($sentensi);
echo "<br>";

//reversing a string
echo strrev($sentensi);
echo "<br>";



