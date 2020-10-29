<?php
    // including the database connection file
    session_start();
    include("../config/dbconn.php");
    $bloodtype=$_POST['bloodtype'];
    $hospitalname=$_POST['hospitalname'];
    if(isset($_POST['submit']))
    {
   // checking empty fields
    if(empty($bloodtype) || empty($hospitalname)) {    
            
        if(empty($bloodtype)) {
            echo "<font color='red'>Bloodtype field is empty!</font><br/>";
        }

        if(empty($hospitalname)) {
            echo "<font color='red'>hospitalname field is empty!</font><br/>";
        }   
       }
        else
        {

           $query = "INSERT INTO bloodsample (bloodsample_name, hospital_name) 
                VALUES ('$bloodtype', '$hospitalname')";
                //query to insert new blood samples

            $result = mysqli_query($dbconn,$query);
            if($result)
            {
                echo "<font color='green'>Succesfully inserted up!</font><br/>";
                header("Location: ./view-available-sample-h.php");
                           
            }
        }   
}
else echo "<font color='red'>Failed submit button not set!</font><br/>";
?>
