<?php
	require_once("database.php");
	require_once("function.php");

	$link = db_connect();

	$count = 3;
	$page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
	$len = floor( count($publishReviews)/$count);

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = "";

	if ($action === "add"){
		if(!empty($_POST)){
			reviews_add($link, $_POST['name'],$_POST['email'], $_POST['text']);
			header("Location: index.php");

		}
		include("add.php");
	} else {
	$publishReviews = reviews_published_all($link, $id);
	include("views.php");
	}

?>
