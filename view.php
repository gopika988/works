<?php
include('dbc.php');
// $sql = "SELECT  * FROM college where college_id=12";
$college_id=$_GET['college_id'];
$sql = "SELECT * FROM college where college_id ='$college_id'";

if (mysqli_query($conn,$sql)) {
  echo "here is your result";

} else {
  echo "OOPs!Error occured" . $conn->error;
}
?>