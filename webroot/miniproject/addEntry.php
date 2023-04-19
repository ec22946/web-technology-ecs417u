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
	<?php
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
				Add Entry
				<a href="index.php" id="homepage_link">🏚</a>
			</header>
		</hgroup>
		
		<form method="POST" action="addPost.php">
			<div>
				<label>
					Title
				</label>
				<input type="text" name="title" required>
			</div>
			<div>
				<label>
					Text Content
				</label>
				<input type="text" name="content" required>
			</div>
			<div>
				<input type="submit" class="button" value="Submit">
				<input type="reset" class="button" value="Clear">
			</div>
		</form>

	</body>
</html>