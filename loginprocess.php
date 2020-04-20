<?php
	require_once('connection.php');

	if(isset($_POST['btn-login']))
{

$user = $_POST['user'];
$Pass = $_POST['password'];

if(empty($user) || empty($Pass))
{
	echo ' Please Fill in the Blank';
}
else
{
	$query = " select * from userinfodata where user='$user' or email='$user'";
	$result = mysqli_query($con,$query);

	if($row = mysqli_fetch_assoc($result))
	{
		$db_password = $row['password'];

		if(md5($Pass)==$db_password)
		{
			header("location:index.php");
		}
		else
		{
			echo 'Incorrect Password';
		}
	}
	else
	{
		echo 'Please Check Your Query';
	}
}
}
?>