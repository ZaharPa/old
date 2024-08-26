<?php
	require_once("../function.php");
	require_once("../database.php");

	$link = db_connect();

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = "";

	if ($action === "delete"){
		$id = $_GET['id'];
		$review = reviews_delete($link, $id);
		header("Location: index.php");
	} else if ($action === "edit"){
		$id = $_GET['id'];
		$review = review($link, $id);
		if(!empty($_POST)){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$text = $_POST['text'];
			reviews_edit($link, $id, $name, $email, $text);
			header("Location: index.php");

		}
		include("edit.php");
	} else if ($action === "publish"){
			$id = $_GET['id'];
			publish($link, $id);
			header("Location: index.php");

	}else {
	$newReviews = reviews_new_all($link, $id);
	include("views.php");
	}

?>