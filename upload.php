<doctype html>
<html>
<head>
<title>Test PHP</title> 
<link rel="stylesheet" href="ecss.css"/> </head>
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
        <marquee behaviour="scroll" direction="left"  >Amin Web Development Group</marquee></li>
        
        </ul>

        <form action="up.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>


