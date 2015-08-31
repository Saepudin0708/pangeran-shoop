<?php
include "src/Koneksi.php";
include "src/User.php";

$error = "";
$User = new User($dbh);


if (isset($_POST['submit'])) {
	
	/*
	 * Cek form pendaftaran
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
	}
		if ($User) {

			
			$to = $_POST['email'];

			$subject = "Activate Your Email";

			$header = "From: Saepudin saepudin.0708@gmail.com";

			$message = "Please click the link below to verify and activate your account. \r\n";
			$message .= "http://www.yourweb.com/confirm.php";

			$sentmail = mail($to, $subject, $message, $header);
		} else {
			echo "Email tidak valid";
		}
		print_r($sentmail);

		if ($sentmail) {
			echo "Your Confirmation Link Has Been Sent to Your Email Address.";
		} else {
			echo "Cannot Send Confirmation Link to Your Email Address";
		}
	
}

include "view/register.php";
?>