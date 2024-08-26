<?php count_views($link,$_GET['id']); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Admin/style.css">
	<title>Cтатья</title>
</head>
<body>

	<h1>Статья </h1>
		<form method="post" action="index.php?read&&id=<?=$review['id']?>">
		<br>
		Количество просмотров:
		<input type="text" name="views" value="<?=$articlePublished['views']?>" readonly>
		<br>
		<label><h3> Заголовок
			<input type="text" name="title" value="<?=$articlePublished['title']?>" class="titleArticle" readonly>
		</label>
		<label>  Дата
			<input type="date" value="<?=$articlePublished['date']?>" name="date" readonly>
		</label>
		<br>
		<label>Содержимое
			<textarea name="content" class="area" readonly><?=$articlePublished['content']?></textarea>
		</label>
		<br>
		<label>Фото
			<img src="data:image/jpeg;base64, <?php echo (base64_encode($articlePublished['image'])) ?>" >
		</label>
		<br>
		<input type="submit"  value="Назад">
	</h3>
	</form>
</body>
</html>