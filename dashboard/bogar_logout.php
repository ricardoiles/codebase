<?php
	session_start();
	session_destroy();

	header('Location: bogar_login.php');
?>
