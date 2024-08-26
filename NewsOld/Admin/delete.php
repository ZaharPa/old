<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Редактор статьи</title>
</head>
<body>
	<h1>Отредактировать статью </h1>
	<form method="post" action="http://study/Admin/index.php?action=edit&&id=<?=$_GET['id']?>">
		<br>
		<label><h3>Название стати
			<input type="text" name="title" value="<?=$article['title']?>" class="titleArticle" required>
		</label>
		<br>
		<label>Дата
			<input type="date" name="date" value="<?=$article['date']?>" required>
		</label>
		<br>
		<label>Содержимое
			<textarea name="content" class="area" required><?=$article['content']?></textarea>
		</label>
		<br>
		<label>Фото
			<input type="file" accept="image/*" name="image">
		</label>
		<br>
		<input type="submit" value="Сохранить">
	</h3>
	</form>
</body>
</html>