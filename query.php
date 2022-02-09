<?php
#connection
include "connect.php";
#query
$sql="SELECT * FROM `hospital form`";
#execute query
$result = mysqli_query($link,$sql);

#check
if ($result){
    #is there data here?
    $data= mysqli_num_rows($result);

    if ($data>0){
        echo "<h3>Data here</h3>";

        while($row= mysqli_fetch_array($result)){
            echo $today = $row["today"];
            echo $branch = $row["branch"];
            echo $title = $row["title"];
            echo $patientName = $row["patientName"];
            echo $dateofbirth = $row["dateofbirth"];
            echo $age = $row["age"];
            echo $emailAddress = $row["emailAddress"];
            echo $phoneNumber = $row["phoneNumber"];
            echo $postalAddress = $row["postalAddress"];
            echo $zipCode = $row["zipCode"];
            echo $location = $row["location"];
            echo $gender = $row["gender"];
            echo $maritalStatus = $row["maritalStatus"];
            echo $employmentStatus = $row["employmentStatus"];
            echo $employer= $row["employer"];
            echo $employerPolicyholder= $row["employerPolicyholder"];
            echo $insurance = $row["insurance"];
            echo $policyholder = $row["policyholder"];
            echo $policyholderName = $row["policyholderName"];
            echo $policyholderRelationship = $row["policyholderRelationship"];
            echo $insurer = $row["insurer"];
            echo $policyholderphoneNumber = $row["policyholderphoneNumber"];
            echo $policyholderMail = $row["policyholderMail"];
            echo $policyholderAddress = $row["policyholderAddress"];
            echo $policyholderZipcode = $row["policyholderZipcode"];
            echo $emergencyName = $row["emergencyName"];
            echo $emergencyRelationship = $row["emergencyRelationship"];
            echo $emergencyphoneNumber = $row["emergencyphoneNumber"];
            echo $emergencyphoneNumber2 = $row["emergencyphoneNumber2"];

            echo "<hr>";
        }
    }

    /* $row= mysqli_fetch_array($result);

      echo $id=$row['id'];
      echo $firstName=$row['firstName'];
      echo $secondName=$row['secondName'];
      echo $emailAddress=$row['emailAddress'];
      echo $phoneNumber=$row['phoneNumber'];
 }*/
    else{
        echo "no records were found in your database!";
    }

}else{
    echo "Error executing your query".mysqli_error($link);
}




