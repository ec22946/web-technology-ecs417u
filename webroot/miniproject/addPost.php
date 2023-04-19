<?php
	session_start();
?>

<?php
			/**
			CREATE TABLE BLOG (
			ID int NOT NULL AUTO_INCREMENT,
			title varchar(255),
			content varchar(255),
			PRIMARY KEY (ID)
			);
			**/
			
			$blog_post_title = $_POST["title"];
			$blog_post_content = $_POST["content"];
			
			$dbhost = getenv("MYSQL_SERVICE_HOST");
			$dbport = getenv("MYSQL_SERVICE_PORT");
			$dbuser = getenv("DATABASE_USER");
			$dbpwd = getenv("DATABASE_PASSWORD");
			$dbname = getenv("DATABASE_NAME");
			// Creates connection
			$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
			// Checks connection
			if ($conn->connect_error)
			{
				die("Connection failed: " . $conn->connect_error);
			}
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$sql = "INSERT INTO BLOG (title, content) VALUES ('$blog_post_title', '$blog_post_content')";
			if ($conn->query($sql) === TRUE)
			{
				
			}
			else
			{
			echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
			}
			
			$referrer = $_SERVER['HTTP_REFERER'];
			echo
			"
				<script type='text/javascript'>
					window.location = 'viewBlog.php';
				</script>
			";
?>