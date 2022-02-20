<doctype html>

<html>
    <head>
    <title>Test PHP</title> 
    <link rel="stylesheet" href="ecss.css"/>    
    </head>
<body>
<ul>
         <li class="titi">
        <a href="home.php">HOME</a>
        <a href="register.php">REGISTER</a><t><t> 
        <a href="upload.php">UPLOAD</a>
        <a href="logout.php" tite="Logout">Logout</a>
        <select  name="info" class='posi'>
         <option values="">info</option>  
         <option values="logout">logout</option>  
           
         </select><br>
        <marquee behaviour="scroll" direction="left" position=":relative;right:122px;" >Amin Web Development Group</marquee></li>
        
        </ul>

    
    <form method = "post" action = "<?php echo "$_SERVER[PHP_SELF]";?>"  class="formctr" >
    <br>
    <br>
    First Name: <input type = "txt" name = "fname" ><br><br>
    Last Name: <input type = "txt" name = "lname" ><br><br>
    <tb>Password:  <input type = "txt" name="passwed" ><br><br>
    <input type = "submit">
    </form>



<?php

include 't.php';

?>
<br>
<?php

  $cookie_name = "user"; 
  $cookie_value = "Tomas_beyene";
  setcookie($cookie_name, $cookie_value, time() + (60), "/"); // 86400 = 1 day
  ?>   
<?php
 if(!isset($_COOKIE[$cookie_name])) {
    echo ("Cookie named ". $cookie_name . " is not set!");
} 
else {
     echo "Cookie " . $cookie_name . " is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
//echo $_SESSION["name"];
    ?>
</body>
</html>