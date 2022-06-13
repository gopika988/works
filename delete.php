
<?php
include('dbc.php');

// echo "<pre>";print_r($_GET);exit;
$college_id=$_GET['id'];


$sql = "DELETE FROM college WHERE `college`.`college_id` = $college_id";

if (mysqli_query($conn,$sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}



