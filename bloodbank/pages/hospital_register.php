<?php
    // including the database connection file
    session_start();
    include("../config/dbconn.php");
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $pass1=md5($password);
    $salt="a1Bz20ydqelm8m1wql";
    $pass1=$salt.$pass1;

    /* Testing outputs
    echo $firstname;
    echo $lastname;
    echo $email;
    echo $password;*/
    $sql_email = "SELECT * FROM hospital WHERE email='$email'";
    $res_email = mysqli_query($dbconn, $sql_email);    
    
    
    if(isset($_POST['submit']))
    {
   // checking empty fields
    if(empty($firstname) || empty($lastname) ||  empty($email) ||  empty($password)) {    
            
        if(empty($firstname)) {
            echo "<font color='red'>Firstname field is empty!</font><br/>";
        }
        if(empty($lastname)) {
            echo "<font color='red'>Lastname field is empty!</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }

        if(empty($password)) {
            echo "<font color='red'>Password field is empty!</font><br/>";
        }   
       }
       //check password and confirm password
        else if($password!==$cpassword) {
            echo "<font color='red'>Password doesn't match!</font><br/>";
        }
        else if (mysqli_num_rows($res_email) > 0) {
        echo "<font color='red'>Sorry... email already exist!</font><br/>"; 
        } 
        else
        {

            $query = "INSERT INTO hospital (firstname, lastname, email, password) 
            VALUES ('$firstname', '$lastname', '$email', '$pass1')";

            $result = mysqli_query($dbconn,$query);
            if($result)
            {
                echo "<font color='green'>Succesfully signed up!</font><br/>";
                header("Location: ./hospital_login.php");
            }
        }   
}
else echo "<font color='red'>Failed submit button not set!</font><br/>";
?>
