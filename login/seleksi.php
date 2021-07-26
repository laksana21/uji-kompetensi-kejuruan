<?php
	include('session.php');

	if ($login_status == "Admin")
	{
		header('location: /kai/landing-page-admin/index.php');
	}
		else if ($login_status == "Staff")
	{
		header('location: /kai/landing-page-admin/index.php');
	}
		else
	{
		header('location: /kai/landing-page/index.php');
	}
?> 