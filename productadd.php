<html>
<head>
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
   
   padding-left:120px;
}

.backlink{
  float:right;
  margin-right: 200px;
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
    <td>Product Name</td>
    <td><input type="text" name="pname"></td>
  </tr>


  <tr>
    <td>Product Price</td>
    <td><input type="text" name="pprice"></td>
  </tr>

  <tr>
    <td>Product Quantity</td>
    <td><input type="text" name="pqty"></td>
  </tr>

  <tr>
    <td>Product</td>
    <td><input type="file" name="pimage" ></td>
  </tr>
  <tr >
    <td class="submitcol"><input type="submit" name="submit" value="Submit"></td>
  </tr>

</table>

</form>
</center>
</body>

</html>


<?php

if(isset($_POST['submit'])){

    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $pqty=$_POST['pqty'];
    $product=$_POST['pimage'];

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

    $sql = "INSERT INTO pdetail (pname,pprice,pqty,product)
VALUES ('$pname','$pprice','$pqty','$product')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
       
}

?>