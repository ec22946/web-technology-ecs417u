<?php
	session_start();
	if($_SESSION['authenticated'] = FALSE)
		{
			$inbound = $_SERVER ['HTTP_REFERER']
			header("Location: //$inbound");
		}
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
?>