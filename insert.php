<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	
		<?php
        include('dbc.php');
       
		
		$college_id=$_POST['college_id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		
		
		$sql = "INSERT INTO college (college_id , first_name, last_name, gender,address,email) VALUES ('','$college_id','$first_name',
			'$last_name','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "data store suuceesfully";

			

		} else{
			echo "ERROR:! Sorry $sql. "
				. mysqli_error($conn);
		}
        
if(isset($_POST['submit']))
{
header("Location:list.php");
}
else{
    echo" please try agin";
}

		
        ?>
		
	
</body>

</html>
