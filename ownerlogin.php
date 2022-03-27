<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
width: 60%;}

input[type=text], input[type=password] {
  width: 30%;
  padding: 12px;
  margin: 12px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}


.container {
  padding: 8px;
  width: 60%;
}



</style>
</head>
<body>
<center>
    <br><br><br><br>
<h2>Login Form</h2>

<form  action="" method="post">
  

  <div class="container">
    
    <input type="text" placeholder="Enter Username" name="uname" required><br><br>

    <input type="password" placeholder="Enter Password" name="pass" required><br><br>
        
    <button type="submit" name="submit">Login</button>
    
  </div>

  
</form>
</center>
</body>
</html>

<?php
if(isset($_POST['submit'])){

    $uname=$_POST['uname'];
    $pass=$_POST['pass'];

if($uname=="owner" && $pass=="owner"){
    header("Location: ownermainpage.php");
}
   
    
}


?>
