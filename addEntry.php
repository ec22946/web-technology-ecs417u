<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Add Entry
		</title>
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="desktop.css" media="screen and (min-width:720px)">
		<link rel="stylesheet" href="mobile.css" media="screen and (max-width:720px)">
		<meta name="viewport" content="width=device-width">
		<link href="https://fonts.googleapis.com/css?family=Quicksand|Staatliches|Play" rel="stylesheet">
		<script src="javascript.js" defer></script>
	</head>
	
	<body>
		<hgroup id="top_header">
			<header>
				Add Entry
				<a href="index.php" id="homepage_link">🏚</a>
			</header>
		</hgroup>
		
		<div id="blog_post_form">
			<form method="POST" action="addPost.php">
				<div>
					<input type="text" name="title" placeholder="title" id="title-field" required>
				</div>
				<div>
					<input type="text" name="content" placeholder="text content" id="content-field" required>
				</div>
				<div>
					<input type="submit" class="button" value="Submit">
					<input type="reset" class="button" value="Clear">
				</div>
			</form>
		</div>

	</body>
</html>