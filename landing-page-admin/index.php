<?php
include('C:\xampp\htdocs\kai\login\session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $login_status; ?> - PT. KAI</title>
<link rel="shortcut icon" href="/kai/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrap">
  <div id="header">
    <div id="topmenu">
      <ul>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="/kai/landing-page-admin/pemesanan/pemesanan.php">Pemesanan Tiket</a></li>
        <li><a href="/kai/landing-page-admin/komentar/komentar.php">Komentar</a> </li>
		<li><a href="/kai/landing-page-admin/tambah-ka/index.php">Tambah KA</a> </li>
		<li><a href="/kai/landing-page-admin/user/uji-kebenaran.php">Kelola User</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
    <h1 id="sitename"><a href="/kai/login/logout.php">Logout</a><span class="desc"><?php echo $login_session; ?> :: <?php echo $login_status; ?></span></h1>
  </div>
  <div id="content">
    <div id="topcol"> <img src="images/imgsample.jpg" alt="" width="100" height="100" class="rightalign" />
      <h2>Admin and Staff Homepage</h2>
      <p>Sebagai Staff dan Admin, bertanggung jawab mengelola web ini termasuk dalam memberi solusi ketika ada kritik maupun pertanyaan, menjadwal sesuai prosedur pada pemesanan dan menjaga nama baik. Karena kami memiliki visi, <strong>"Berbudi pekerti, berprestasi, kompetitif di era global berdasarkan iman dan taqwa."</strong></p>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div id="col_1">
      <h3 class="subhead">PERUMKA</h3>
      <p> <img class="leftalign" src="images/img1.jpg" alt="" />Merupakan logo pertama dari Perkereta Apian di Indonesia. Di dalam logo ini terdapat tulisan KAI yang mencerminkan Kereta Api Indonesia.</p>
	</div>
    <div id="col_2">
      <h3 class="subhead">Kereta Api Indonesia</h3>
      <p><img class="leftalign" src="images/img2.jpg" alt="" />Logo ini diperkenalkan pada 28 September 1990 sampai 28 September 2011 dan menandai awal PT. Kereta Api Indonesia</p>
    </div>
    <div id="col_3">
      <h3 class="subhead">PJKA</h3>
      <p><img class="leftalign" src="images/img3.jpg" alt="" />Perusahaan Jawatan Kereta Api, merupakan langkah selanjutnya dari era perkeretaapian di indonesia. Logo Sayap dimana KAI akan selalu berusaha menjadi lebih baik. </p>
    </div>
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
