<?php
if (isset($_GET["submit"])){
    $firstName = $_GET["firstName"];
    $secondName =$_GET["secondName"];

    echo "First Name indicated is $firstName <br>";
    echo "Second Name indicated is $secondName <br>";
}else{
    echo "<h3>Please fill in this form</h3><br>";
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Method</title>
</head>
<body>
<form action="getmethod.php" method="get">
    <div>
        <label for="">First Name</label>
        <input type="text" name="firstName" required>
    </div>
    <div>
        <label for="">Second Name</label>
        <input type="text" name="secondName" required>
    </div>

    <input type="submit" name="submit" value="SUBMIT">

</form>



</body>
</html>