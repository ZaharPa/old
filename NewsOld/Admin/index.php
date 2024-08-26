<?php
	require_once("../models/articles.php");
	require_once("../database.php");

	$link = db_connect();

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = "";

	if ($action == "add"){
		if(!empty($_POST)){
			articles_new($link, $_POST['title'],$_POST['date'], $_POST['content'], $_POST['image']);
			header("Location: index.php");
		}
		include("add.php");
	} else if ($action == "delete") {
		$id = $_GET[id];
		$article = articles_delete($link, $id);
		header("Location: index.php");
	} else if ($action == "publish") {
		$id = $_GET[id];
		publish($link,$id);
		header("Location: index.php");
	} else{
	$articles = articles_all($link);
	include("articles_views.php");
	}




?>