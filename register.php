<?php
include "src/Koneksi.php";
include "src/User.php";

$error = "";
$User = new User($dbh);

if (isset($_POST['submit'])) {
	
	/*
	 * Cek form pendaftaran
	 * Array ( [name] => [email] => [password] => [password_conf] => [address] => [city] => [phone] => [submit] => ) 
	 */	 
	if (empty($_POST['name'])) {
		$error .= "<p>Nama harus diisi</p>";
	}
	
	if (empty($_POST['email'])) {
		$error .= "<p>Email harus diisi</p>";
	}
	
	if (empty($_POST['password'] || $_POST['password'] != $_POST['password_conf'])) {
		$error .= "<p>Password tidak valid</p>";
	}
	
	if (empty($error)) {
		// proses simpan ke database
		$User->addUser(
			$_POST['email'],
			$_POST['name'],
			md5($_POST['password']),
			$_POST['address'],
			$_POST['zip_code'],
			$_POST['city'],
			$_POST['gender'],
			$_POST['phone']
		);
		
		echo "
			<script>
				window.location = 'register.php';
			</script>
		";
	}
}

include "view/register.php";
?>
