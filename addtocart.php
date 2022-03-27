
<?php

//if(isset($_POST['submit'])){

    $pname=$_GET['link2'];
    $pprice=$_GET['link3'];
    $pqty=$_GET['link4'];
    $product=$_GET['link5'];

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

    $sql = "INSERT INTO carttbl (pname,pprice,pqty,product)
VALUES ('$pname','$pprice','$pqty','$product')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:cproductview.php');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
       

?>