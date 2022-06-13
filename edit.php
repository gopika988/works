<?php
include('dbc.php');
// $sql = "SELECT  * FROM college where college_id=12";
$college_id=$_GET['id'];
$sql="UPDATE `college` SET `college_id`='[value-1]',`first_name`='[value-2]',`last_name`='[value-3]',`gender`='[value-4]',`address`='[value-5]',`email`='[value-6]',`created_at`='[value-7]' WHERE 'college_id'=$college_id";
if (mysqli_query($conn,$sql)) {
  echo "here is your result";

} else {
  echo "OOPs!Error occured" . $conn->error;
}
?>