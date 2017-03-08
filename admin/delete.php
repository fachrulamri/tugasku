<?php
include "koneksi.php";
$numoffrow=$_GET['id'];
$query=mysql_query("delete from siswaskanja where id=".$numoffrow);
echo "<script>
		alert('Selamat anda berhasil delete data');
		window.location.assign('home.php');
	</script>";
?>