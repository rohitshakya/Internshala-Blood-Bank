<!--
 * Author : Rohit Shakya
 * Date   : Oct-2020
 * Editor : Sublime text
 * Local server: Xampp
 * Title : Internshala Blood Bank Assignment  
 * Version: v1.2
 -->  
 <?php
 //page for destroying all the session variables and session itself
 session_start();
 session_destroy();
 header('Location: ../index.html'); //redirection to index.html
?>
