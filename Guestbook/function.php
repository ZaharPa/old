<?php
function reviews_new_all($link){
	$query = "SELECT * FROM newreviews ORDER BY id DESC";
	$result =mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	$n = mysqli_num_rows($result);
	$reviews = array();

	for($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$reviews[] = $row;
	}
	return $reviews;
}

function reviews_delete($link, $id){
	$id = (int)$id;
	if ($id == 0)
		return false;
	$query = "DELETE FROM newreviews WHERE id = '$id'";
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);
}

function reviews_add($link, $name, $email, $text){
	if ($name == '')
		return false;

	$t = "INSERT INTO newreviews (name, email, text) VALUES ('%s', '%s', '%s')";

	$query = sprintf($t, mysqli_real_escape_string($link, $name),
			mysqli_real_escape_string($link, $email),
			mysqli_real_escape_string($link,$text));

	echo $query;
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	return true;

}

function reviews_published_all($link){
	$query = "SELECT * FROM publishedreviews ORDER BY id DESC";
	$result =mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	$n = mysqli_num_rows($result);
	$publishReviews = array();

	for($i = 0; $i < $n; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$publishReviews[] = $row;
	}
	return $publishReviews;
}

function reviews_edit($link, $id, $name, $email, $text){

	$query = "UPDATE newreviews SET name = '$name', email = '$email', text = '$text' WHERE id = '$id'";
	$result = mysqli_query($link, $query);
	if(!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);

}

function review($link, $id){
	$id = (int)$id;

	$query = sprintf("SELECT * FROM newreviews WHERE id=%d",$id);
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));

	$review = mysqli_fetch_assoc($result);
	return $review;

}

function publish($link,$id){
	$id = (int)$id;
	if ($id == 0)
		return false;

	$query ="INSERT INTO publishedreviews (name, email, text) SELECT name, email, text FROM newreviews WHERE newreviews.id ='$id' ";

	echo $query;
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));



	$query1 = "DELETE FROM newreviews WHERE id = '$id'";
	$result1 = mysqli_query($link, $query1);

	if(!$result1)
		die(mysqli_error($link));
		return mysqli_affected_rows($link);
		return true;
}
?>