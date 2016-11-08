<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		$user_email = trim($_POST['user_email']);
		$user_password = trim($_POST['password']);
		$user_nom = trim($_POST['user_nom']);
		$user_adr = trim($_POST['user_adr']);
		$user_tele = trim($_POST['user_tele']);
		$user_compte = trim($_POST['user_compte']);
		
		
		
		
		$stmt = $db_con->prepare("insert into user(rs,adresse,telephone,ncompte,email,password) values (:user_nom,:user_adr,:user_tele,:user_compte,:user_email,:user_password)");
	$stmt->bindParam(':user_email', $user_email);
	$stmt->bindParam(':user_password', $user_password);
	$stmt->bindParam(':user_compte', $user_compte);
	$stmt->bindParam(':user_adr', $user_adr);
	$stmt->bindParam(':user_tele', $user_tele);
	$stmt->bindParam(':user_nom', $user_nom);
	
	$stmt->execute();
	echo "ok";
	}else{
		echo "no";
	}

?>