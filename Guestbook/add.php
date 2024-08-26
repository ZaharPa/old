<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<title>Новый отзыв</title>
</head>
<body>
	<h1>Добавить новый отзыв </h1>
	<form method="post" action="index.php?action=add">
		<br>
		<label><h3>Имя
			<input type="text" name="name" class="titleArticle" required>
		</label>
		<br>
		<label>Почта
			<input type="email" name="email" required>
		</label>
		<br>
		<label>Текст
			<textarea name="text" class="text" required></textarea>
		</label>
		<br>
		<label>CAPTCHA
			<div class="g-recaptcha" data-sitekey="6Lf6ADEdAAAAANQcZ80gSP_s8r7Av3bTCbp1_zhJ" ></div>
		</label>
		<br>
		<input type="submit" value="Сохранить">
	</h3>
	</form>
</body>
</html>