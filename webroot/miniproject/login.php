<html>
	<head>
		<title>
			Login
		</title>
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="desktop.css" media="screen and (min-width:720px)">
		<link rel="stylesheet" href="mobile.css" media="screen and (max-width:720px)">
		<meta name="viewport" content="width=device-width">
		<!-- <link href="https://fonts.googleapis.com/css?family=Quicksand|Staatliches|Play" rel="stylesheet"> -->
	</head>
	
	<body>
		<hgroup id="top_header">
			<header>
				Login
			</header>
		</hgroup>
		
		<p>
			Username: <?php echo $_POST[username]?>
		</p>
		<p>
			Password: <?php echo $_POST[password]?>
		</p>
	</body>
</html>