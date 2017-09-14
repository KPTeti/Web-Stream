<?php
	session_start();

	session_unset($_SESSION['state']);
	header('Location: index.php');

?>