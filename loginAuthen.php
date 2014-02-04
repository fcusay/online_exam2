<?php
	require_once('config.php');
	require_once('examDAO.php');

	$email = $_POST['email'];
	$password = $_POST['password'];
	

	examDAO::InsertLogin($email, $password);

?>