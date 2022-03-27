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

<a class="backlink" href="ownermainpage.php">Back</a>
  <center>
  <br><br>
<form action="" method="post">
<table id="customers">
  <tr>
    <th>ProductName</th>
    <th>ProductPrice</th>
    <th>ProductQty</th>
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

$sql = "SELECT * FROM pdetail";
$result = $conn->query($sql);


  while($row = $result->fetch_assoc()) {
    
  ?>

<tr>

<td><?php echo $row["pname"]; ?> </td>
<td><?php echo $row["pprice"]; ?> </td>
<td><?php echo $row["pqty"]; ?> </td>
<td><?php echo "<img src='images/".$row["product"]."' width=100 height=100 >" ?> </td>
<td>
<a href="productupdate2.php?link=<?php echo $row["id"];?>&&link2=<?php echo $row["pname"];?>&&link3=<?php echo $row["pprice"];?>&&link4=<?php echo $row["pqty"];?>&&link5=<?php echo $row["product"];?>"><input type="button" value="update" name="update" class="btn btn-primary"></a>
<a href="productdelete.php?link=<?php echo $row["id"];?>"><input type=button value=Delete class="btn btn-danger"></a>
</td>
</tr>
 
<?php
  }
?>

  </table>
</form>
</center>
</body>
</html>


