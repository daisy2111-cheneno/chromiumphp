<?php

echo "<h3>Indexed Arrays</h3>";

$languages=array("JavaScript","Ruby","PHP","R");
print_r($languages);

foreach($languages as $value){
    echo "<br><br>$value";
}
echo "<br>";
echo "<br>";
#sorting in ascending order
sort($languages);
print_r($languages);
echo "<br>";
echo "<br>";
#sorting in descending order
rsort($languages);
print_r($languages);
echo "<br>";
echo "<br>";
echo "<h3>Associative Array</h3>";
$marks = array("Peter"=>34,"Jane"=>67,"Henry"=>87,"Lucy"=>49);

foreach ($marks as $keys => $value)
    echo "<br>Your marks $keys is $value";

echo "<br>";
echo "<br>";
#sorting in ascending order by values
asort($marks);
print_r($marks);
echo "<br>";
echo "<br>";
#sorting in descending order by values
arsort($marks);
print_r($marks);
echo "<br>";
echo "<br>";
#sorting in ascending order by keys
ksort($marks);
print_r($marks);
echo "<br>";
echo "<br>";
#sorting in descending order by keys
krsort($marks);
print_r($marks);
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<h3>Multi-dimensional</h3>";

$contents=array(

    array(
        "name"=>"Mary Jane",
        "email"=>"jane@gmail.com",
        "pnumber"=>"0712 345 678",
    ),
    array(
        "name"=>"Kelvin G",
        "email"=>"kelvin@gmail.com",
        "pnumber"=>"0789 123 456",
    ),
    array(
        "name"=>"Grace M",
        "email"=>"grace@gmail.com",
        "pnumber"=>"0752 123 456",
    )
);

echo "Email Address for Grace is " .$contents[2]["email"]. " and her phone number is " .$contents[2]["pnumber"];

#print all the values (foreach/for)

foreach($contents as $content){
    echo "<br>";
    echo "<br>";
    echo $content["name"];
    echo "<br>";
    echo $content["email"];
    echo "<br>";
    echo $content["pnumber"];
    echo "<br>";
}



/*for($index=1;$index<4;$index++){
    for($index_2=1;$index_2<3;$index_2++){
        echo $contents[$index][$index_2];
    }
    echo "<br>";
}*/