<?php
	include "src/Koneksi.php";
	include "src/User.php";

	$user = new User($dbh);

	$email = $_GET['code'];

	$user->updateVerifiedEmail($email);

	echo "Verifikasi Berhasil<br><br>
		Klik <a href='login.php'>login</a>
	";


?>