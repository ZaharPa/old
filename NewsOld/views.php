<?php
	require_once("index.php");

	$count = 3;
	$page = isset($_GET['page']) ? (int)$_GET['page'] : 0;
	$len = floor( count($articlesPublish)/$count);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Admin/style.css">
	<title>Новости</title>
</head>
<body>
	<h1>Новости</h1>
 	<br>
	<a href="Admin/index.php">Панель администратора</a>
 	<br>
 	<a href="index.php?action=date">Сортирировать по дате</a>
 	<a href="index.php?action=views">Сортирировать по рейтингу</a>
 	<table>
 		<tr>
 			<th>Дата</th>
 			<th>Заголовок</th>
 			<th>Просмотры</th>
 			<th></th>
 		</tr>
<?php for($i = $page*$count; $i<($page+1)*$count;$i++){ ?>
 		<tr>
 			<td><?=$articlesPublish[$i]['date']?></td>
 			<td><?=$articlesPublish[$i]['title']?></td>
 			<td><?=$articlesPublish[$i]['views']?></td>
 			<td>
 				<a href="index.php?action=read&id=<?=$articlesPublish[$i]['id']?>">Читать полностью</a>
 			</td>

 		</tr>
<?php } ?>
 	</table>
 	<?php for ($i=0; $i < $len + 1; $i++) { ?>
	<th><a href="index.php?page=<?=$i?>"><?=$i + 1?></a></th>
<?php } ?>
</body>
</html>