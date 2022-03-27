<html>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css">
<style>

table{

    width:30%;
    border-collapse: collapse;

}
td {
  text-align: left;
  margin: 80px;
}
tr{
    height: 60px;
}

.submitcol{
   
   padding-left:100px;
}

.backlink{
  float:right;
  margin-right: 200px;
}

input[type=submit]{
 margin-left:40px;
  
}


</style>
</head>
<body>
<a class="backlink" href="ownermainpage.php">Back</a>
<center>
    <br><br><br><br>
    <form action="" method="post">
<table>
  <tr>
    <td>Name</td>
    <td><input type="text" name="uname"></td>
  </tr>


  <tr>
    <td>PhoneNo</td>
    <td><input type="text" name="uphone"></td>
  </tr>

  <tr>
    <td>Email</td>
    <td><input type="text" name="uemail"></td>
  </tr>

  <tr>
    <td>Password</td>
    <td><input type="password" name="upass" ></td>
  </tr>
  <tr >
    <td class="submitcol"><input type="submit" name="submit" value="Submit" class="btn btn-primary"></td>
  </tr>

</table>

</form>

</center>
</body>

</html>


<?php

if(isset($_POST['submit'])){

    $uname=$_POST['uname'];
    $uphone=$_POST['uphone'];
    $uemail=$_POST['uemail'];
    $upass=$_POST['upass'];

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

    $sql = "INSERT INTO clientreg (name,phoneno,email,pass)
VALUES ('$uname','$uphone','$uemail','$upass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:clientlogin.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
       
}

?>