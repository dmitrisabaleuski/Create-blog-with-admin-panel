<!DOCTYPE html>
<html>
<head>
	<title>МОЙ ПЕРВЫЙ БЛОГ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>
<body>
	<div class="container">
		<h1>МОЙ ПЕРВЫЙ БЛОГ</h1>
		<a href="index.php?action=add">Добавить статью</a>
		<div>
			
				<table class="admin-table">
					<tr>
						<th>Дата</th>
						<th>Заголовок</th>
						<th></th>
						<th></th>
					</tr>
					<?php foreach($articles as $a): ?>
					<tr>
						<td><?=$a['date']?></td>
						<td><?=$a['title']?></td>
						<td>
							<a href="index.php?action=edit&id=><?=$a['id']?>">Редактировать</a>
						</td>
						<td>
							<a href="index.php?action=delete&id=><?=$a['id']?>">Удалить</a>
						</td>
					</tr>
					<?php endforeach ?>
				</table>
			
		</div>
		<footer>
			<p>МОЙ ПЕРВЫЙ БЛОГ<br>Copyright &copy: 2016</p>
		</footer>
	</div>
</body>
</html>