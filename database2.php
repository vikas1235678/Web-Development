<?php
$connect=mysqli_connect('localhost','root','','signup1');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
else{
	echo 'Submit Success';
	}
	
?>