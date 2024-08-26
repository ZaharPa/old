<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Новая стаття</title>
</head>
<body>
	<h1>Добавить новую статтю </h1>
	<form method="post" action="index.php?action=add">
		<br>
		<label><h3>Название стати
			<input type="text" name="title" class="titleArticle" required>
		</label>
		<br>
		<label>Дата
			<input type="date" name="date" required>
		</label>
		<br>
		<label>Содержимое
			<textarea name="content" class="area" required></textarea>
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