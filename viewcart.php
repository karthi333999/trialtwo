<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style/bootstrap.min.css">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align:center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
  text-align:center;
}
.backlink{
  float:right;
  margin-right: 200px;
}
</style>
</head>
<body>

<a class="backlink" href="clientmainpage.php">Back</a>
<a class="backlink" href="payment.php">Payment</a>
  <center>
  <br><br>
<form action="" method="post">
<table id="customers">
  <tr>
    <th>ProductName</th>
    <th>ProductPrice</th>
    <!---<th>ProductQty</th>--->
    <th>Product</th>
    <th>Action</th>
  </tr>

<?php
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

//$sql2 = "SELECT SUM(pprice) FROM carttbl";
//$result2 = $conn->query($sql2);


$sql = "SELECT * FROM carttbl";
$result = $conn->query($sql);


  while($row = $result->fetch_assoc()) {
    
  ?>

<tr>

<td><?php echo $row["pname"]; ?> </td>
<td><?php echo $row["pprice"]; ?> </td>
<!---<td><?php echo $row["pqty"]; ?> </td>--->
<td><?php echo "<img src='images/".$row["product"]."' width=100 height=100 >" ?> </td>
<td>
<a href="cartdelete.php?link=<?php echo $row["id"];?>"><input type=button value=Delete class="btn btn-primary"></a>
</td>

</tr>
 
<?php
  }
?>

<?php
  $sql = "SELECT  SUM(pprice) from carttbl";
  $result = $conn->query($sql);
  //display data on web page
  while($row = mysqli_fetch_array($result)){
     // echo " Total cost: ". $row['SUM(cost)'];
      //echo "<br>";
  
?>


<tr>
<td colspan="2">Total</td>
<td colspan="2"><?php echo $row['SUM(pprice)']; ?></td>
  </tr>
  <?php
  }
?>
  </table>
</form>
</center>
</body>
</html>


