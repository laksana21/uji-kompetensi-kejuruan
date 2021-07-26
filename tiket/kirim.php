<?php
	include ("koneksi.php");
	
	$kdpesan=$_GET['kode'];
	$nama=$_GET['nama'];
	$noid=$_GET['noid'];
	$telp=$_GET['telp'];
	$kursi=$_GET['kursi'];
	$naka=$_GET['naka'];
	$noka=$_GET['no'];
	$kelas=$_GET['kelas'];
	$asal=$_GET['dari'];
	$tuju=$_GET['ke'];
	$tanggal=$_GET['tanggal'];
	$gerbong=$_GET['gerbong'];

	if (!empty($nama)){
		if (!empty($noid)){
			mysql_query("INSERT INTO `tiket_kai`.`pemesanan` (`kode_pesan`, `nama`, `telepon`, `no_id`, `sta_awal`, `sta_tuju`, `tanggal`, `nama_ka`, `kelas`, `gerbong`, `no_kursi`) VALUES ('$kdpesan', '$nama', '$telp', '$noid', '$asal', '$tuju', '$tanggal', '$naka', '$kelas', '$gerbong', '$kursi');");
			header("location: selesai.php");
		}else{
			echo "Anda belum mengisikan Nomor Identitas";
		}
	}else{
		echo "Anda belum mengisi nama";
	}
?>