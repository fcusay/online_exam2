<?php
	require_once ('examDAO.php');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	examDAO::InsertUser($fname,$lname,$email,$password);

?>