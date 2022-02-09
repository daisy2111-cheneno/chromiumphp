<?php

#0<=grade<=100
#grade<40 fail
#if diff(grade,next multiple of 5)<3,round grade up to the next multiple of 5
#grade<38, no rounding occurs

#grading parameter
$i=38;

$next_multiple_5= ceil($i/5)*5;

if ($next_multiple_5-$i<3 and $i>=38) {
    echo $next_multiple_5;
}else{
    echo $i;
}