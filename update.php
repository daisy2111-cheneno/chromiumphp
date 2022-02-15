<?php
include "connect.php";
if(isset($_POST['update'])){

    $id=$_POST['id'];
    $up_firstName=$_POST['firstName'];
    $up_secondName=$_POST['secondName'];
    $up_emailAddress=$_POST['emailAddress'];
    $up_phoneNumber=$_POST['phoneNumber'];


    $upd_sql="UPDATE `details` SET `firstName`='$up_firstName',`secondName`='$up_secondName',`emailAddress`='$up_emailAddress',`phoneNumber`='$up_phoneNumber' WHERE id=$id";
    $up_result=mysqli_query($link,$upd_sql);

    if($up_result){
        echo "Records have been updated successfully";
        header("location:select.php");
    }else{
        echo "Error excuting query $upd_sql".mysqli_error($link,$upd_sql);
    }


}else{

    if(isset($_GET['id']) and !empty($_GET['id'])){
        $id=$_GET['id'];

        $sql="SELECT * FROM `details` WHERE id=$id";

        $result=mysqli_query($link,$sql);

        if($result){

            $data=mysqli_num_rows($result);
            if($data==1){

                $row = mysqli_fetch_array($result);


                $firstName=$row['firstName'];
                $secondName=$row['secondName'];
                $emailAddress=$row['emailAddress'];
                $phoneNumber=$row['phoneNumber'];


            }else{
                echo "No record was found";
            }




        }else{

            echo"Error excuting query $sql".mysqli_error($link,$sql);
        }




    }else{
        echo "id value not picked";

    }
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
<h2>Update Record Here</h2>
<form action="update.php" method="post">
    <div>
        <label for="">First Name</label>
        <input type="text" name="firstName" value="<?php echo $firstName; ?>" required>
    </div>
    <div>
        <label for="">Second Name</label>
        <input type="text" name="secondName" value="<?php echo $secondName;  ?>" required>
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="emailAddress" value="<?php echo $emailAddress; ?>" required>
    </div>
    <div>
        <label for="">Phone Number</label>
        <input type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>" required>
    </div>
    <div>
        <label>ID</label>
        <input type="text" name="id" value="<?php echo $_GET["id"]?>">
    </div>

    <input type="submit" name="update" value="UPDATE">

</form>
</body>
</html>

