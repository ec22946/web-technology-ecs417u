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
			
			echo $blog_post_title;
			echo $blog_post_content;
			
			
			/**
			echo
			'
				<script type="text/javascript">
					window.location = "\index.php";
				</script>
			';
			**/
?>