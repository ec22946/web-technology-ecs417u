<html>
	<head>
		<title>
			Authentication
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
				Authentication
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
			
			$username = $_POST["username"];
			$password = $_POST["password"];
			
			$authenticated = FALSE;
		
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
				$sql = "SELECT password FROM USERS WHERE username = '$username'";
				
				//if ($conn->query($sql) === TRUE)
				//{								
					$result = $con->query($sql);
					$retrieved_passwords = $result->fetch_array()[0] ?? '';
					
					echo "<br> $retrieved_password";
					
					if($retrieved_password == $password)
					{
						$authenticated = TRUE;
					}
				//}
				/**
				else
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				**/
				$conn->close();
			}
		?>
		
		<br>
		
		<p>
			<?php
				if($authenticated)
				{
					echo "Welcome $username";
				}
				else
				{
					echo "$username not found";
				}
			?>
		</p>
	</body>
</html>