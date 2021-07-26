<?php
	include('C:\xampp\htdocs\kai\login\session.php');

	if ($login_status == "Admin")
	{
		header('location: user.php');
	}
	else
	{
		header('location: bukan-admin.php');
	}
?> 