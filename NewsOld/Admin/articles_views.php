<?php
	require_once("../models/articles.php");
	require_once("../database.php");

	$link = db_connect();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Новости</title>
</head>
<body>
 	<h1>Новости</h1>
 	<br>
 	<a href="index.php?action=add">Добавить статтю</a>
 	<table>
 		<tr>
 			<th>Дата</th>
 			<th>Заголовок</th>
 			<th></th>
 			<th>Опубликовано</th>
 		</tr>
<?php foreach($articles as $a): ?>
 		<tr>
 			<td><?=$a['date']?></td>
 			<td><?=$a['title']?></td>
 			<td>
 				<a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
 			</td>
 			<td>
 				<form  method="post" action="index.php?action=publish&&id=<?=$a['id']?>">
 					<input type="text" value="" name="published" readonly >
 					<input type="submit" name="checkBtn" value="Опубликовать">
 				</form>
 			</td>
 		</tr>
<?php endforeach ?>
 	</table>
</body>
</html>