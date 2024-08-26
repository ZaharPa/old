<?php

function articles_all($link){
	$query = "SELECT * FROM articles ORDER BY id DESC";
	$result =mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	$n = mysqli_num_rows($result);
	$articles = array();

	for($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$articles[] = $row;
	}
	return $articles;
}

function check($link,$id){

	$query = "SELECT id FROM published";
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	$n = mysqli_num_rows($result);
	$a = array();

	for($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$a[] = $row;

		if($id === $row)
			$f = 1;
	}

	if ($f == 1)
		return "Опубликовано";
	else
		return "Неопубликовано";

}

function publish($link,$id){
	$id = (int)$id;
	if ($id == 0)
		return false;

	$query = "INSERT INTO published SELECT * FROM articles WHERE id ='$id' ";

	echo $query;
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

		return true;


}

function articles_published_all($link){
	$query = "SELECT * FROM published ORDER BY id DESC";
	$result =mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	$n = mysqli_num_rows($result);
	$articles = array();

	for($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$articles[] = $row;
	}

	return $articles;
}

function articles_new($link, $title, $date, $content,$image){
	if ($title == '')
		return false;

	$t = "INSERT INTO articles (title, date, content, image) VALUES ('%s', '%s', '%s', '%s')";

	$query = sprintf($t, mysqli_real_escape_string($link, $title),
			mysqli_real_escape_string($link, $date),
			mysqli_real_escape_string($link,$content),
			mysqli_real_escape_string($link, $image));

	echo $query;
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	return true;

}

function articles_delete($link, $id){
	$id = (int)$id;
	if ($id == 0)
		return false;
	$query = "DELETE FROM articles WHERE id = '$id'";
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);
}

function articles_views($link, $id){
	$id = (int)$id;

	$query = sprintf("SELECT * FROM published WHERE id=%d",$id);
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	$articlePublished = mysqli_fetch_assoc($result);

	return $articlePublished;

}

function count_views($link,$id){
	$query = "UPDATE published SET views = views + 1 WHERE id ='$id' ";
	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);
}

function articles_published_all_date($link){
	$query = "SELECT * FROM published ORDER BY date DESC";
	$result =mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	$n = mysqli_num_rows($result);
	$articlesPublish = array();

	for($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$articlesPublish[] = $row;
	}

	return $articlesPublish;
}

function articles_published_all_views($link){
	$query = "SELECT * FROM published ORDER BY views DESC";
	$result =mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	$n = mysqli_num_rows($result);
	$articlesPublish = array();

	for($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$articlesPublish[] = $row;
	}

	return $articlesPublish;
}

function checked($link,$id) {
	$query = "SELECT id FROM published";
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	$n = mysqli_num_rows($result);
	$a = array();

	for($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$a[] = $row;
		if($id === $row)
			$f = 1;
	}

	if ($f == 1)
		return "Опубликовано";
	else
		return "Неопубликовано";
}
?>