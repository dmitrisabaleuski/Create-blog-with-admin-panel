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
		<div>
			<div class="article">
				<h3><?=$article['title']?></h3>
				<em>Опубликовано:<?=$article['date']?></em>
				<p><?=$article['content']?></p>
			</div>
		</div>
		<footer>
			<p>МОЙ ПЕРВЫЙ БЛОГ<br>Copyright &copy: 2016</p>
		</footer>
	</div>
</body>
</html>