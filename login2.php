<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <title>AMIN WEB DEVELOPMENT LOGIN PAGE </title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form  method="post">
        <h2>LOGIN</h2>
        <label>User Name</label>
        <input type="text" name="nam" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="pass" placeholder="Password"><br> 
        
        
      <input type="submit"  name="submit">
        <input type="reset"><br>
        <a href="signup.php">signup</a>
     </form>
    
 <?php 
   require 'dbcon.php';

     if($_SERVER["REQUEST_METHOD"] == "POST") {
        $myusername = mysqli_real_escape_string($conn,$_POST['nam']);//nam is form name
        $mypassword = mysqli_real_escape_string($conn,$_POST['pass']);//pass is form password
        $sql = "SELECT id FROM loginnn WHERE NAME = '$myusername' and PASSWED = '$mypassword'";//match
        //loginnn in table name------NAME & PASSWED is column name of loginnn table
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        // If result matched $myusername and $mypassword, table row must be 1 row
          
        if($count == 1) {
         $_SESSION["id"] = $row['NAME'];
         $_SESSION["name"] = $row['PASSWED'];
           header("location: home.php");
        }else{
           $error = "Your Login Name or Password is invalid";
           
            }
            
           
     }
     
 ?>

</body>

</html>