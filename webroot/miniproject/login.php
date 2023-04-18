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
			$username = $_POST["username"];
			$password = $_POST["password"];
		
			$dbhost = getenv("MYSQL_SERVICE_HOST");
			$dbport = getenv("MYSQL_SERVICE_PORT");
			$dbuser = getenv("DATABASE_USER");
			$dbpwd = getenv("DATABASE_PASSWORD");
			$dbname = getenv("DATABASE_NAME");
			
			$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
			if ($conn->connect_error)
			{
				die("Connection failed: " . $conn->connect_error);
			}
			
			if ($_SERVER['REQUEST_METHOD'] === 'POST')
			{
				if ($conn->query($sql) === TRUE)
				{
					$sql = "INSERT INTO USERS (username, password) VALUES ('$username', '$password')";
				}
				else
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$conn->close();
			}
		?>
		
		<p>
			Username: <?php echo $username; ?>
		</p>
		<p>
			Password: <?php echo $password; ?>
		</p>
	</body>
</html>