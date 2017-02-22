<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mad Libs</title>
	<link rel="stylesheet" href="view/assets/css/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<!-- Created by Tim Van den Enden on 31/01/2017.
         Copyright © 2017 Tim Van den Enden. All rights reserved. -->
</head>
<body>
	<header><h1>Mad Libs</h1></header>
	<nav>
		<ul>
			<li>
				<form method="get">
					<input type="hidden" name="view" value="paniek">
					<button type="submit">Er heerst paniek...</button>					
				</form>
			</li>
			<li>
				<form method="get">
					<input type="hidden" name="view" value="onkunde">
					<button type="submit">Onkunde</button>
				</form>
			</li>
		</ul>
	</nav>
	<main>
		<div class="content">
			
			<?php require(_ROOT_ . "/view/$content.view.php"); ?>			

		</div>
	</main>
	<footer>
		De website is gemaakt door Tim van den Enden.
	</footer>
	<!-- Created by Tim Van den Enden on 31/01/2017.
     	 Copyright © 2017 Tim Van den Enden. All rights reserved. -->
</body>
</html>