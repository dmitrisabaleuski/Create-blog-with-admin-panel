<!DOCTYPE html>
<html>
<head>
	<title>МОЙ ПЕРВЫЙ БЛОГ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>
<body>
	<div class="container">
		<h1>МОЙ ПЕРВЫЙ БЛОГ</h1>
		<a href="admin/index.php">Панель администратора</a>
		<div>
			<?php foreach($articles as $a): ?>
			<div class="article">
				<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
				<em>Опубликовано:<?=$a['date']?></em>
				<p><?=$a['content']?></p>
			</div>
			<?php endforeach ?>
		</div>
		<footer>
			<p>МОЙ ПЕРВЫЙ БЛОГ<br>Copyright &copy: 2016</p>
		</footer>
	</div>
</body>
</html>