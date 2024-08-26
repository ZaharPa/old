<?php
	require_once("index.php");

	$count = 3;
	$page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
	$len = floor( count($publishReviews)/$count);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Гостевая книга</title>
</head>
<body>
<a href="/admin/index.php">Административная панель</a>
<br>
<h2>Отзывы</h2>
<br>
<a href="add.php">Добавить отзыв</a>
<table>
 		<tr>
 			<th>Имя</th>
 			<th>Почта</th>
 			<th>Текст</th>
 		</tr>
<?php for($i = $page*$count; $i<($page+1)*$count;$i++){ ?>
 		<tr>
 			<td><?=$publishReviews[$i]['name']?></td>
 			<td><?=$publishReviews[$i]['email']?></td>
 			<td><?=$publishReviews[$i]['text']?></td>
 		</tr>
<?php } ?>
 	</table>
 	<?php for ($i=0; $i < $len + 1; $i++) { ?>
	<th><a href="index.php?page=<?=$i?>"><?=$i + 1?></a></th>
<?php } ?>
</body>
</html>