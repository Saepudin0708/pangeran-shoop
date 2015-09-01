<?php
include "src/Koneksi.php";
include "src/User.php";
$user = new User($dbh);

if (isset($_POST["ForgotPassword"])) {

	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$email = $_POST["email"];
	} else {
		echo "email is not valid";
		exit;
	}
	
	$userExist = $user->getUserByEmail($_POST['email']);

	if ($userExist["email"])
	{
		$salt = "498#2D83B631%3800EBD!801600D*7E3CC13";

		$password= hash('sha512', $salt.$userExist["email"]);

		$pwrurl = "shoop.pangeranweb.php?q=".$password;

		$mailbody = "Dear user,\n\nIf this e-mail does not apply to you please ignore it.
		It appears that you have requested a password reset at our website
		shoop.pangeranweb.com\n\nTo reset your password, please click the link below.
		If you cannot click it, please paste it into your web browser's 
		address bar.\n\n" . $pwrurl . "\n\nThanks,\nThe Administration";
		mail($userExists["email"], "shoop.pangeranweb.com - Password Reset", $mailbody);
        echo "Your password recovery key has been sent to your e-mail address.";
        
	    }
	    else
        echo "No user with that e-mail address exists.";
	}
?>
	