<?php
// Start the session
session_start();
?>
<?php
 require 'dbcon.php';
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST['usern']))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST['usern']))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM loginnn WHERE NAME = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST['usern']);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST['usern']);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["pass"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['pass'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["pass"]);
         
    }
    
    // Validate confirm password
    if(empty(trim($_POST["cpass"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST['cpass']);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO loginnn (ID,NAME,PASSWED) VALUES ('',? , ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
           
            $param_username = $username;
            //$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_password =$password;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
               header("location: home.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 

<!DOCTYPE html>
<html>
<head>

    <title>AMIN WEB DEVELOPMENT SIGNIN PAGE </title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

     <form  method="post">
        <h2>SIGN UP</h2>
        <h3>Please fill this form to create an account.</h3>
        
        <input type="text" name="usern" placeholder="User Name"><br>
        
        <input type="password" name="pass" placeholder="Password"><br> 
        
        <input type="password" name="cpass" placeholder="confirm Password">
        <br>
        
      <input type="submit"  name="submit">
        <input type="reset"><br>
        <a href="login2.php">Login here</a>
     </form>
</body>
</html>