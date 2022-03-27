<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/bootstrap.min.css">
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
  width: 70%;
}



</style>
</head>
<body>
<center>
    <br><br><br><br>
<h2>Login Form</h2>

<form  action="" method="post">
  

  <div class="container">
    
    <input type="text" placeholder="Enter Username" name="uname" class="form-control" required><br><br>

    <input type="password" placeholder="Enter Password" name="pass"  class="form-control"required><br><br>
        
    <button type="submit" name="submit" class="btn btn-primary">Login</button>
    
  </div>  
</form>
<br>
Newuser?<a href="clientregister.php">Signup</a>
</center>
</body>
</html>



<?php
if(isset($_POST['submit'])){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }




    $uname=$_POST['uname'];
    $pass=$_POST['pass'];


    $sql = "select *from clientreg where email = '$uname' and pass = '$pass'";  
        $result = mysqli_query($conn, $sql);  
        $count = mysqli_num_rows($result);  



        if($count == 1){  
            header("Location: clientmainpage.php"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
       
}

?>
*/