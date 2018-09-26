<?php
$connect=mysqli_connect('sql104.epizy.com','epiz_21561353','vikasakcsit123','epiz_21561353_signup');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
else{
	echo 'Submit Success';
	}
	
?>