<?php
        if(isset($_POST['submit'])){
            $todaydate = $_POST["todaydate"];
            $branch = $_POST["branch"];
            $title = $_POST["title"];
            $pname = $_POST["pname"];
            $dob = $_POST["dob"];
            $age = $_POST["age"];
            $emailaddress = $_POST["emailaddress"];
            $pnumber = $_POST["pnumber"];
            $postal = $_POST["postal"];
            $zipcode = $_POST["zipcode"];
            $location = $_POST["location"];
            $gender = $_POST["gender"];
            $maritalstatus = $_POST["maritalstatus"];
            $employmentstatus = $_POST["employmentstatus"];
            $e_policyholder= $_POST["e_policyholder"];
            $employer= $_POST["employer"];
            $insurance = $_POST["insurance"];
            $p_policyholder = $_POST["p_policyholder"];
            $policyholder_name = $_POST["policyholder_name"];
            $relationship = $_POST["relationship"];
            $insurer = $_POST["insurer"];
            $pnumber2 = $_POST["pnumber2"];
            $mail = $_POST["mail"];
            $address = $_POST["address"];
            $zipcode2 = $_POST["zipcode2"];
            $name = $_POST["name"];

            echo "Today's Date indicated is $todaydate <br>";
            echo "Branch indicated is $branch <br>";
            echo "Title indicated is $title <br>";
            echo "Patient Name indicated is $pname <br>";
            echo "Date of Birth indicated is $dob <br>";
            echo "Age indicated is $age <br>";
            echo "Email Address indicated is $emailaddress <br>";
            echo "Phone Number indicated is $pnumber <br>";
            echo "Postal Address indicated is $postal<br>";
            echo "Zip Code indicated is $zipcode <br>";
            echo "County indicated is $location <br>";
            echo "Gender indicated is $gender <br>";
            echo "Marital Status indicated is $maritalstatus <br>";
            echo "Employment Status indicated is $employmentstatus <br>";
            echo "Employer insurance indicated is $e_policyholder <br>";
            echo "Employer indicated is $employer <br>";
            echo "Insurance indicated is $insurance <br>";
            echo "Personal insurance indicated is $p_policyholder <br>";
            echo "Policyholder's name indicated is $policyholder_name <br>";
            echo "Relationship with policyholder indicated is $relationship <br>";
            echo "Insurer indicated is $insurer <br>";
            echo "Phone number indicated is $pnumber2 <br>";
            echo "Email Address indicated is $mail <br>";
            echo "Postal Address indicated is $address <br>";
            echo "Zipcode indicated is $zipcode2 <br>";
            echo "Name indicated is $name <br>";
        }else{
            echo "<h3>Fill in this form</h3><br>";

        }
