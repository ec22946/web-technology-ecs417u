<?php
	session_start();
	if($_SESSION['authenticated'] = FALSE)
		{
			$inbound = $_SERVER ['HTTP_REFERER'];
			header("Location: //$inbound");
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			View Blog
		</title>
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="desktop.css" media="screen and (min-width:720px)">
		<link rel="stylesheet" href="mobile.css" media="screen and (max-width:720px)">
		<meta name="viewport" content="width=device-width">
		<link href="https://fonts.googleapis.com/css?family=Quicksand|Staatliches|Play" rel="stylesheet">
		<script src="javascript.js" defer></script>
	</head>
	
	<body>
	<?php

	?>
		<hgroup id="top_header">
			<header>
				View Blog
				<a href="index.php" id="homepage_link">🏚</a>
			</header>
		</hgroup>
		
		<article>
			<section>
				<p>
					<a href="addEntry.php">
						➕
					</a>
				</p>
			</section>
		</article>
	</body>
</html>