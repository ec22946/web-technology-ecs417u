<?php
	session_start();
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
		if(isset($_SESSION['authenticated']) = FALSE)
		{
			echo
			'
				<script type="text/javascript">
					window.location = "\index.php";
				</script>
			';
		}
		if($_SESSION['authenticated'] = FALSE)
		{
			echo
			'
				<script type="text/javascript">
					window.location = "\index.php";
				</script>
			';
		}
	?>
	
		<hgroup id="top_header">
			<header>
				View Blog
				<a href="index.php" id="homepage_link">🏚</a>
			</header>
		</hgroup>
		
		<article>
			<section>
				<p id="add_entry_button">
					<a href="addEntry.php">
						➕
					</a>
				</p>
			</section>
		</article>
	</body>
</html>