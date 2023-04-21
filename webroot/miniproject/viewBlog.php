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
			
			//if ($_SERVER['REQUEST_METHOD'] === 'POST')
			//{
				$sql = "SELECT title FROM BLOG";
				
				//if ($conn->query($sql) === TRUE)
				//{								
					//$result = $conn->query($sql);
					//$retrieved_passwords = $result->fetch_array()[0] ?? '';
					
					$result = mysqli_query($conn, $sql);
					$retrieved_titles = mysqli_fetch_array($result);
					
				/**
				}
				else
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				**/
				$conn->close();
			//}
		?>
		<?php
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
			
			//if ($_SERVER['REQUEST_METHOD'] === 'POST')
			//{
				$sql = "SELECT content FROM BLOG";
				
				//if ($conn->query($sql) === TRUE)
				//{								
					//$result = $conn->query($sql);
					//$retrieved_passwords = $result->fetch_array()[0] ?? '';
					
					$result = mysqli_query($conn, $sql);
					$retrieved_content = mysqli_fetch_array($result);
				/**
				}
				else
				{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				**/
				$conn->close();
			//}
		?>
		
		<hgroup id="top_header">
			<header>
				View Blog
				<a href="index.php" id="homepage_link">🏚</a>
			</header>
		</hgroup>
		
		<p id="add_entry_button">
			<?php
				if($_SESSION['authenticated'] == TRUE)
				{
					echo
					'
						<a href="addEntry.php">
							➕
						</a>
					';
				}
			?>
		</p>
		
		<article id="blog_content">
			<section>
				<header>
					Temp title 1
				</header>
				<p>
					sample text 1
				</p>
			</section>
			
			<?php
				for($i = 0; $i < count($retrieved_titles); $i++)
				{
					$title = $retrieved_titles[$i];
					$content = $retrieved_content[$i];
					echo
					"
						<section>
							<header>
								$title
							</header>
							<p>
								$content
							</p>
						</section>
					";
				}
			?>	
		</article>
	</body>
</html>