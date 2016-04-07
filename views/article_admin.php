<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Мой первый блог</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>
<body>
	<div class="container">
		<h1>Мой первый блог</h1>
		<div>
			<form method="post" action="index.php?action=add">
				<label>
					Название
					<input type="text" name="title" value="" class="form-item" autofocus required>
				</label>
				<br>
				<label>
					Дата
					<input type="date" name="date" value="" class="form-item" required>
				</label>
				<br>
				<label>
					Содержание
					<textarea name="content" value="" class="form-item" required></textarea>
				</label>

				<input type="submit" value="Сохранить" class="btn">
			</form>
		</div>
		<footer>
			<p>МОЙ ПЕРВЫЙ БЛОГ<br>Copyright &copy: 2016</p>
		</footer>
	</div>
</body>
</html>