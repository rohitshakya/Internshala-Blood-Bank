<?php
// including the database connection file
    session_start();
    include("../config/dbconn.php");
    $a=$_SESSION['email'];
    $b=$_SESSION['bloodtype'];
    
    if($_SESSION['var']!=="Requested")
    {       
        //request to all blood samples which are similar to receiver's blood sample
           $query2 = "SELECT * FROM bloodsample";
           $result2 = mysqli_query($dbconn,$query2);
           if($result2){
            while($res = mysqli_fetch_array($result2)) { 
            $_SESSION['hospital_name']= $res['hospital_name'];
            if($res['bloodsample_name']===$_SESSION['bloodtype']){   
            $c=$res['hospital_name'];
            $query = "INSERT INTO request (request_name, request_hospital_name,request_blood_type) 
                VALUES ('$a','$c','$b')";
            $result = mysqli_query($dbconn,$query);
            if($result)
            {
                echo "<font color='green'>Succesfully inserted up!</font><br/>";
            }
            }
        }}
    
        $_SESSION['var']="Requested";
       
    }
     header("Location: ./request-available-sample.php");
?>
