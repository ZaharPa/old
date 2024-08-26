<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Книга отзывов</title>
</head>
<body>
 	<h1>Книга отзывов. Неопубликованые отзывы</h1>
 	<br>
 	<table>
 		<tr>
 			<th>Имя</th>
 			<th>Почта</th>
 			<th>Текст</th>
 			<th></th>
 			<th></th>
 			<th></th>
 		</tr>
 		<form method="post" action="index.php?action=publish&&id=<?=$a['id']?>">
<?php foreach($newReviews as $a){ ?>
 		<tr>
 			<td><input type="text" name="name" value="<?=$a['name']?>" class="titleArticle" readonly></td>
 			<td><input type="email" name="email" value="<?=$a['email']?>"readonly ></td>
 			<td><textarea name="text" class="text" readonly><?=$a['text']?></textarea></td>
 			<td>
 				<a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
 			</td>
 			<td>
 				<a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
 			</td>
 			<td>
 				<a href="index.php?action=publish&id=<?=$a['id']?>">Опубликовать</a>
 			</td>
 		</tr>
	<?php } ?>
	</form>
 	</table>
</body>
</html>