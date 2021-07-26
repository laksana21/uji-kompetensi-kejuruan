<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="/kai/favicon.ico"/>
<title>Login Sukses</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="landing">
<b id="welcome">Selamat Datang : <i><?php echo $login_session; ?></i></b>
<br>
<b id="welcome">User ID : <i><?php echo $login_id; ?></i></b>
<br>
<b id="welcome">User Kategori : <i><?php echo $login_status; ?></i></b>
<b id="logout"><a href="seleksi.php">Lanjutkan</a></b>
</div>
</body>
</html>