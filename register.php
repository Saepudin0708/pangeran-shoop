<?php
include "src/Koneksi.php";
include "src/User.php";

$error = "";
$error_two = "";
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
	
	if (empty($_POST['password']) || $_POST['password'] != $_POST['password_conf']) {
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
			$_POST['phone'],
			'not_verified'
		);
	}

	$to = $_POST['email'];
	$subject = "Activate Your Email";
	$header = "From: Pangeran Shoop info@pangeranweb.com";
	$message = "Please click the link below to verify and activate your account. \r\n";
	$message .= "http://shoop.pangeranweb.com/confirm.php?code=$to";

	$sentmail = mail($to, $subject, $message, $header);
		
	print_r($sentmail);

	if ($sentmail) {
		$error_two .= "<p>Your Confirmation Link Has Been Sent to Your Email Address.</p>";
	} else {
		$error_two .= "<p>Cannot Send Confirmation Link to Your Email Address.</p>";
	}
}

include "view/register.php";
?>