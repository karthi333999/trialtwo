<html>
<body>
<center><a href="productview.php">Back</a></center>
<?php

//if(isset($_POST['submit'])){

    
    $ids = $_GET['link'];

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

    $ids2 = $ids;
    //$pname=$_POST['pname'];
    //$pprice=$_POST['pprice'];
    //$pqty=$_POST['pqty'];
    //$pimage=$_POST['pimagefile'];
    
    $sql = "DELETE FROM pdetail WHERE id='" . $_GET["link"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";

    //"<script></script>"
    header('Location:productview.php');
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
     
   
    $conn->close();
       
//}

?>
</body>
</html>