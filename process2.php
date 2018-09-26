<?php 
include ("database2.php");
?>

<?php

// create a variable
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone_number']

//Execute the query

mysqli_query($connect,"INSERT INTO signup(first_name,last_name,email,phone_number)
				VALUES('$firstname','$lastname','$email','$phone')");
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Details Added</p>";
	echo "<a href='welcome.html'>Welcome to Department of AKCSIT</a>";
}
 else {
	echo "Submit not success<br />";
	echo mysqli_error ($connect);
}
?>