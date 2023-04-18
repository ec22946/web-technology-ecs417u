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
		
		<?php
			/**
			CREATE TABLE USERS (
			ID int NOT NULL AUTO_INCREMENT,
			username varchar(255),
			password varchar(255),
			PRIMARY KEY (ID)
			);
			**/
		
			$dbhost = getenv("MYSQL_SERVICE_HOST");
			$dbport = getenv("MYSQL_SERVICE_PORT");
			$dbuser = getenv("DATABASE_USER");
			$dbpwd = getenv("DATABASE_PASSWORD");
			$dbname = getenv("DATABASE_NAME");
			// Creates connection
			$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
			// Checks connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		?>
		
		<p>
			Username: <?php echo $_POST["username"]?>
		</p>
		<p>
			Password: <?php echo $_POST["password"]?>
		</p>
		
		<?php
			if ($_SERVER['REQUEST_METHOD'] === 'POST')
			{
				$username = $_POST["username"];
				$password = $_POST["password"];
				

				
				if ($conn->query($sql) === TRUE)
				{
					
				}
				else
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$conn->close();
			}
		?>
	</body>
</html>