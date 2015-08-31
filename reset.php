<?php
include "src/Koneksi.php";
include "src/User.php";

$user = new User($dbh);
if (isset($_POST["ResetPasswordForm"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	$hash = $_POST["q"];

	$salt = "498#2D83B631%3800EBD!801600D*7E3CC13";
	$resetkey = hash('sha512', $salt.$email);

	if ($resetkey == $hash)
	{
		if ($password == $confirmpassword)
		{
			$password == hash('sha512', $salt.$password);

			$user->updateUserPassword($password, $email);
			echo "Your Password Has been succsesfully reset";
		}
		else
		{
			echo "your Password do not match";
		}

	}
	else echo "your pasword resetkey is invalid";
}
?>