<?php
	require_once("database.php");
	require_once("models/articles.php");

	$link = db_connect();


	$count = 3;
	$page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
	$len = floor( count($articlesPublish)/$count);

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = "";

	if($action == "read"){
		if(!isset($_GET['id']))
			header("Location: index.php");
		$id = (int)$_GET['id'];
		$articlePublished = articles_views($link, $id);

		include("oncenews.php");

	} else if($action === "date"){
		$articlesPublish = articles_published_all_date($link, $id);
		include("views.php");
	} else if ($action == "views"){
		$articlesPublish = articles_published_all_views($link, $id);
		include("views.php");
	} else {
		$articlesPublish = articles_published_all($link, $id);
		include("views.php");
	}
	
?>