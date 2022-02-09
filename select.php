<?php
#connection
    include "connect.php";
#query
  $sql="SELECT * FROM `details`";
  #execute query
  $result = mysqli_query($link,$sql);

  #check
   if ($result){
       #is there data here?
       $data= mysqli_num_rows($result);

       if ($data>0){
           echo "<h3>Data here</h3>";

             while($row= mysqli_fetch_array($result)){
                 echo $id=$row['id'] ;
                 echo $firstName=$row['firstName'];
                 echo $secondName=$row['secondName'];
                 echo $emailAddress=$row['emailAddress'];
                 echo $phoneNumber=$row['phoneNumber'];
                 echo "<a href='delete.php?id=".$id."'> <button>Delete</button></a>";

                 echo "<a href='update.php?id=".$id."'><button>Update</button></a>";
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



