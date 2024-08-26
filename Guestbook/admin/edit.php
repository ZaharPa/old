<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<title>Редактор отзывов</title>
</head>
<body>
	<h1>Отредактировать отзыв </h1>
	<form method="post" action="index.php?action=edit&&id=<?=$review['id']?>">
		<br>
		<label><h3>Имя
			<input type="text" name="name" class="titleArticle" value="<?=$review['name']?>" >
		</label>
		<br>
		<label>Почта
			<input type="email" name="email" value="<?=$review['email']?>" >
		</label>
		<br>
		<label>Текст
			<textarea name="text" class="text"><?=$review['text']?></textarea>
		</label>

		<input type="submit" value="Сохранить">
	</h3>
	</form>
</body>
</html>