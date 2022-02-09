<?php

 $link =mysqli_connect("localhost","root","","chromium");

 if($link==true){

     echo "SERVER CONNECTED SUCCESSFULLY";

 }else{

     echo "Error connecting to server".mysqli_connect_error($link);
 }