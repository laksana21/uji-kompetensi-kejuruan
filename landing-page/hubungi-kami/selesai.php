<?php
include('C:\xampp\htdocs\kai\login\session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hubungi Kami</title>
<link rel="shortcut icon" href="/kai/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrap">
  <div id="header">
    <div id="topmenu">
      <ul>
        <li><a href="/kai/landing-page/index.php">Home</a></li>
        <li><a href="/kai/landing-page/styles.php">Sejarah PT. KAI</a></li>
        <li><a href="/kai/landing-page/notes.php">Notes</a> </li>
		<li><a href="/kai/landing-page/tiket/pesan-tiket.php">Tiket</a> </li>
		<li class="active"><a href="/kai/landing-page/hubungi-kami/index.php">Kontak</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
    <h1 id="sitename"><a href="/kai/login/logout.php">Logout</a><span class="desc"><?php echo $login_session; ?></span></h1>
  </div>
  <div id="content">
    <div id="topcol"> <img src="images/imgsample.jpg" alt="" width="100" height="100" class="rightalign" />
      <h2>Terima Kasih.</h2>
      <p><h3>Pesan anda telah terkirim. Apabila kami ada kekurangan, kami mohon maaf.</h3></p>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="clear"></div>
  </div>
  <div class="clear"> </div>
  <div id="footer">
    <div id="btm_cont"> </div>
    <div id="ft_btm"> Copyright &copy; YourSiteName.com | <a href="#">Some</a> <a href="#">Links</a> <a href="#">Goes</a> <a href="#">Here</a><br />
      <!--Credits -->
      <a href="http://ramblingsoul.com">CSS Template</a> by Rambling Soul<br />
      Images from<a href="http://sxc.hu"> sxc.hu</a>
      <!--/Credits -->
    </div>
  </div>
</div>
</body>
</html>
