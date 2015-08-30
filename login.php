<?php
include "src/Koneksi.php";
include "src/User.php";

$error = "";
$User = new User($dbh);

if (isset($_POST['submit'])) {
	
	if (empty($_POST['email'])) {
		$error .= "<p>Email harus diisi</p>";
	}
	
	if (empty($_POST['password'])) {
		$error .= "<p>Password harus diisi</p>";
	}
	
	if (empty($error)) {
		
		$data_user = $User->getUserByEmail($_POST['email']);
		
		if(empty($data_user)) {
			$error .= "Email dan Password tidak valid";
		} else {
			if ($data_user['password'] != md5($_POST['password'])) {
				$error .= "Email dan Password tidak valid";
			} else {
				$_SESSION['user'] = $data_user;
				echo "
					<script>
						window.location = 'index.php';
					</script>
				";
			}
		}
		
	}
}

include "view/login.php";
