<?php
include "connect.php";

           if(isset($_POST['submit'])){
               #fetching the data from the form
               $today = $_POST["today"];
               $branch = $_POST["branch"];
               $title = $_POST["title"];
               $patientName = $_POST["patientName"];
               $dateofbirth = $_POST["dateofbirth"];
               $age = $_POST["age"];
               $emailAddress = $_POST["emailAddress"];
               $phoneNumber = $_POST["phoneNumber"];
               $postalAddress = $_POST["postalAddress"];
               $zipCode = $_POST["zipCode"];
               $location = $_POST["location"];
               $gender = $_POST["gender"];
               $maritalStatus = $_POST["maritalStatus"];
               $employmentStatus = $_POST["employmentStatus"];
               $employer= $_POST["employer"];
               $employerPolicyholder= $_POST["employerPolicyholder"];
               $insurance = $_POST["insurance"];
               $policyholder = $_POST["policyholder"];
               $policyholderName = $_POST["policyholderName"];
               $policyholderRelationship = $_POST["policyholderRelationship"];
               $insurer = $_POST["insurer"];
               $policyholderphoneNumber = $_POST["policyholderphoneNumber"];
               $policyholderMail = $_POST["policyholderMail"];
               $policyholderAddress = $_POST["policyholderAddress"];
               $policyholderZipcode = $_POST["policyholderZipcode"];
               $emergencyName = $_POST["emergencyName"];
               $emergencyRelationship = $_POST["emergencyRelationship"];
               $emergencyphoneNumber = $_POST["emergencyphoneNumber"];
               $emergencyphoneNumber2 = $_POST["emergencyphoneNumber2"];

               #query
               $sql= "INSERT INTO `hospital form`(`today`, `branch`, `title`, `patientName`, `dateofbirth`, `age`, `emailAddress`, `phoneNumber`, `postalAddress`, `zipCode`, `location`, `gender`, `maritalStatus`, `employmentStatus`, `employerPolicyholder`, `employer`, `insurance`, `policyholder`, `policyholderName`, `policyholderRelationship`, `insurer`, `policyholderphoneNumber`, `policyholderMail`, `policyholderAddress`, `policyholderZipcode`, `emergencyName`, `emergencyRelationship`, `emergencyphoneNumber`, `emergencyphoneNumber2`)
           VALUES ('$today','$branch','$title','$patientName','$dateofbirth','$age','$emailAddress','$phoneNumber','$postalAddress','$zipCode','$location','$gender','$maritalStatus','$employmentStatus','$employerPolicyholder','$employer','$insurance','$policyholder','$policyholderName','$policyholderRelationship','$insurer','$policyholderphoneNumber','$policyholderMail','$policyholderAddress','$policyholderZipcode','$emergencyName','$emergencyRelationship','$emergencyphoneNumber','$emergencyphoneNumber2')";

               #execute the query
               $result=mysqli_query($link,$sql);

               #checking for results
               if ($result){
                   echo "Record added successfully";
               }else{
                   echo "Error executing this query $sql".mysqli_error($link);
               }
           }else{
               echo "<h3>fill in this form</h3><br>";
           }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Page 1</title>
    <link rel="stylesheet" href="css/assignment1.css">
</head>
<body>
<form action="assignment1page1.php" method="post">
    <img class="imagesty"  src="images\health_first_logo.jpg" alt="Loading"><h3>PATIENT MEDICAL FORM</h3>
    <div>
        <label>Today's Date:<span class="required">*</span></label>
        <input class="inputstyle" type="date" name="today" required>
        <label>Branch<span class="required">*</span></label>
        <input class="inputstyle" type="text" name="branch" required>
    </div>
    <h4>PATIENT INFORMATION</h4>
    <div>
        <label>Title: </label>
        <select class="inputstyle" name="title" required>
            <option value="sir">Sir.</option>
            <option value="prof">Prof.</option>
            <option value="dr">Dr.</option>
            <option value="mr">Mr.</option>
            <option value="mrs">Mrs.</option>
            <option value="miss">Miss</option>
        </select>
        <label>Patient Name:<span class="required">*</span></label>
        <input class="inputstyle" type="text" name="patientName" required>
    </div>
    <div>
        <label>Date of Birth:<span class="required">*</span></label>
        <input class="inputstyle" type="date" name="dateofbirth" required>
        <label>Age:</label>
        <input class="inputstyle" type="text" name="age" required>
    </div>
    <div>
        <label>Email Address: <span class="required">*</span></label>
        <input class="inputstyle" type="email" name="emailAddress" required>
        <label>Phone Number: <span class="required">*</span></label>
        <input class="inputstyle" type="tel" name="phoneNumber" required>
    </div>
    <div>
        <label>Postal Address: </label>
        <input class="inputstyle" type="text" name="postalAddress" required>
        <label>ZIP Code: </label>
        <input class="inputstyle" type="text"  name="zipCode" required>
    </div>
    <div>
        <label>County:<span class="required">*</span></label>
        <select class="inputstyle" name="location" required>
            <option value="mombasa">Mombasa</option>
            <option value="kwale">Kwale</option>
            <option value="kilifi">Kilifi</option>
            <option value="tana river">Tana River</option>
            <option value="lamu">Lamu</option>
            <option value="taita-taveta">Taita-Taveta</option>
            <option value="garissa">Garissa</option>
            <option value="wajir">Wajir</option>
            <option value="mandera">Mandera</option>
            <option value="marsabit">Marsabit</option>
            <option value="isiolo">Isiolo</option>
            <option value="meru">Meru</option>
            <option value="tharaka-nithi">Tharaka-Nithi</option>
            <option value="embu">Embu</option>
            <option value="kitui">Kitui</option>
            <option value="machakos">Machakos</option>
            <option value="makueni">Makueni</option>
            <option value="nyandarua">Nyandarua</option>
            <option value="nyeri">Nyeri</option>
            <option value="kirinyaga">Kirinyaga</option>
            <option value="murang'a">Murang'a</option>
            <option value="kiambu">Kiambu</option>
            <option value="turkana">Turkana</option>
            <option value="west p">West Pokot</option>
            <option value="samburu">Samburu</option>
            <option value="trans-nzoia">Trans-Nzoia</option>
            <option value="uasin-gishu">Uasin-Gishu</option>
            <option value="elgeyo-marakwet">Elgeyo-Marakwet</option>
            <option value="nandi">Nandi</option>
            <option value="baringo">Baringo</option>
            <option value="laikipa">Laikipia</option>
            <option value="nakuru">Nakuru</option>
            <option value="narok">Narok</option>
            <option value="kajiado">Kajiado</option>
            <option value="kericho">Kericho</option>
            <option value="bomet">Bomet</option>
            <option value="kakamega">Kakamega</option>
            <option value="vihiga">Vihiga</option>
            <option value="bungoma">Bungoma</option>
            <option value="busia">Busia</option>
            <option value="siaya">Siaya</option>
            <option value="kisumu">Kisumu</option>
            <option value="homa bay">Homa Bay</option>
            <option value="migori">Migori</option>
            <option value="kisii">Kisii</option>
            <option value="nyamira">Nyamira</option>
            <option value="nairobi">Nairobi</option>
        </select>
        <label>Gender:<span class="required">*</span></label>
        <input type="radio" name="gender" value="male">
        <label>Male</label>
        <input type="radio" name="gender" value="female" >
        <label>Female</label>
    </div>
    <br>
    <div>
        <label>Marital Status</label>
        <input type="checkbox" name="maritalStatus" value="single">
        <label>Single</label>
        <input type="checkbox" name="maritalStatus" value="Married">
        <label>Married</label>
        <input type="checkbox" name="maritalStatus" value="Divorced">
        <label>Divorced</label>
    </div>
    <h4>EMPLOYMENT INFORMATION</h4>
    <div>
        <label>Employment Status</label>
        <input type="checkbox" name="employmentStatus" value="employed">
        <label>Employed</label>
        <input type="checkbox" name="employmentStatus" value="unemployed">
        <label>Unemployed</label>
        <input type="checkbox" name="employmentStatus" value="self-employed">
        <label>Self-employed</label>
    </div>
    <br>
    <div>
        <label>Employer:</label>
        <input class="inputstyle" type="text" name="employer">
        <br>
        <label>Are you insured by your employer?</label>
        <input type="checkbox" name="employerPolicyholder" value="Yes">
        <label>Yes</label>
        <input type="checkbox" name="employerPolicyholder" value="No">
        <label>No</label>
    </div>
    <div>
        <h4>INSURANCE INFORMATION</h4>
        <label>Is patient covered by insurance?</label>
        <input type="checkbox" name="insurance" value="Yes">
        <label>Yes</label>
        <input type="checkbox" name="insurance" value="No">
        <label>No</label>
        <label>(If Yes, complete this section)</label>
    </div>
    <br>
    <div>
        <label>Policyholder:</label>
        <input type="checkbox" name="policyholder" value="Yes">
        <label>Yes</label>
        <input type="checkbox" name="policyholder" value="No">
        <label>No</label>
        <label>(If No, provide the policyholder's information below)</label>
    </div>
    <br>
    <div>
        <label>Policyholder's Name:</label>
        <input class="inputstyle" type="text" name="policyholderName" required>
        <label>Relationship with Policyholder:</label>
        <input class="inputstyle" type="text" name="policyholderRelationship" required>
        <br>
        <label>Insurer:</label>
        <input class="inputstyle" type="text" name="insurer" required>
        <label>Insurer's Phone Number:</label>
        <input class="inputstyle" type="tel" name="policyholderphoneNumber">
        <br>
        <label>Email Address:</label>
        <input class="inputstyle" type="email" name="policyholderMail" required>
        <label>Postal Address:</label>
        <input class="inputstyle" type="text" name="policyholderAddress" required>
        <div>
            <label>ZIP Code:</label>
            <input class="inputstyle" type="text" name="policyholderZipcode" required>
        </div>
    </div>
    <div>
        <h4>EMERGENCY CONTACT</h4>
        <label>Name:<span class="required">*</span></label>
        <input class="inputstyle" type="text" name="emergencyName" required>
        <label>Relationship to Patient:</label>
        <input class="inputstyle" type="text" name="emergencyRelationship" required>
        <br>
        <label>Phone Number:<span class="required">*</span></label>
        <input class="inputstyle" type="tel" name="emergencyphoneNumber" required>
        <label>Alternative Phone Number:</label>
        <input class="inputstyle" type="tel" name="emergencyphoneNumber2" required>
    </div>
    <div>
        <h4>RELEASE OF INFORMATION</h4>
        <p>The above information is true to the best of my knowledge.
            I authorize my insurance benefits be paid directly to the physician.
            I understand that I am financially responsible for any balance.
            I also authorize [Name of Practice] or insurance company to release any information required to process my claims.
        </p>
        <br>
        <br>
        <label>Patient/Guardian Signature</label>
        <hr>
    </div>
    <div>
        <input id="button" type="submit" name="submit" value="submit">
    </div>
</form><br><br>
<p class="pstyles" >Copyright &copy; 2022 by Health First Clinic</p>
</body>
</html>

