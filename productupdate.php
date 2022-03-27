<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

<script>
function img_pathUrl(input){
        $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
    }

</script>
</head>
<body>
<a class="backlink" href="ownermainpage.php">Back</a>
<?php
$ids = $_GET['link'];		 
$pname = $_GET['link2'];	// string value
$price = $_GET['link3'];		// integer value
$pqty = $_GET['link4'];	// string value
$pimage = $_GET['link5'];
?>


<center>
    <br><br><br><br>
    <form action="" method="post" enctype="multipart/form-data">
<table>
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="pname" value="<?php echo $pname ?>"></td>
  </tr>


  <tr>
    <td>Product Price</td>
    <td><input type="text" name="pprice" value="<?php echo $price ?>"></td>
  </tr>

  <tr>
    <td>Product Quantity</td>
    <td><input type="text" name="pqty" value="<?php echo $pqty ?>"></td>
  </tr>

  <tr>
    <td>Product</td>
  
    <td> <img src="images/<?php echo $pimage ?>" width=200 height=100 id="img_url" name="pimagesrc"> </td>
  </tr>

  <tr>
    <td>Product</td>
    <td><input type="file" name="pimagefile" onChange="img_pathUrl(this);" accept="image/<?php echo $pimage ?>"></td>
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

    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $pqty=$_POST['pqty'];
    $product=$_POST['pimagesrc'];
    $product2=$_FILES['pimagefile']['name'];
    $temp=$_FILES['pimagefile']['tmp_name'];

   // $uploadfolder="images/";
    //$movefile=move_uploaded_file($temp , $uploadfolder.$product2);

   // if($movefile){

    //}


    move_uploaded_file($_FILES["pimagefile"]["tmp_name"],"images/" . $_FILES["pimagefile"]["name"]);			
$location1=$_FILES["pimagefile"]["name"];

    //move_uploaded_file($temp , "images/$product2");

    $sql = "UPDATE pdetail SET pname='$pname',pprice=$pprice,pqty=$pqty,product='$location1' WHERE id=$ids";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

//if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
//} else {
 // echo "Error: " . $sql . "<br>" . $conn->error;
//}

$conn->close();
       
}

?>
