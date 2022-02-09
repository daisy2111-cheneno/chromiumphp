<?php
include "connect.php";

     if(isset($_POST['submit'])){
         #fetching the data from the form
         $firstName = $_POST["firstName"];
         $secondName = $_POST["secondName"];
         $emailAddress = $_POST["emailAddress"];
         $phoneNumber= $_POST["phoneNumber"];



         #query
         $sql= "INSERT INTO `details`(`firstName`, `secondName`, `emailAddress`, `phoneNumber`)
         VALUES ('$firstName','$secondName','$emailAddress','$phoneNumber')";

         #execute the query
         $result=mysqli_query($link,$sql);

         #checking for results
         if ($result){
             echo "Record added successfully";
             header("location:select.php");
         }else{
             echo "Error executing this query $sql".mysqli_error($link);
         }

     }else{
         echo "<h3>fill in this form</h3><br>";
     }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Method</title>
</head>
<body>
<form action="postmethod.php" method="post">
    <div>
        <label for="">First Name</label>
        <input type="text" name="firstName" required>
    </div>
    <div>
        <label for="">Second Name</label>
        <input type="text" name="secondName" required>
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="emailAddress" required>
    </div>
    <div>
        <label for="">Phone Number</label>
        <input type="text" name="phoneNumber" required>
    </div>

    <input type="submit" name="submit" value="SUBMIT">

</form>
</body>
</html>




