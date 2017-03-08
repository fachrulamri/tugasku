<?php
session_start();
include "koneksi.php";

$idnew=$_POST['id'];
$namanew=$_POST['nama'];
$alamatnew=$_POST['alamat'];
$usianew=$_POST['usia'];
$query = "UPDATE siswaskanja SET nama = '$nama_baru', alamat = '$alamat_baru' , usia = '$usia_baru' WHERE id = '$id_baru'" ;
$hasil  = mysql_query($query);
if ($hasil) {
echo "<script>
		alert('Selamat anda berhasil mengupdate data');
		window.location.assign('home.php');
	</script>";
}
?>