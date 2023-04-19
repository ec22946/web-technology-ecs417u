<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Portfolio
		</title>
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="desktop.css" media="screen and (min-width:720px)">
		<link rel="stylesheet" href="mobile.css" media="screen and (max-width:720px)">
		<meta name="viewport" content="width=device-width">
		<link href="https://fonts.googleapis.com/css?family=Quicksand|Staatliches|Play" rel="stylesheet">
		<script src="javascript.js" defer></script>
	</head>
	
	<body>
		<hgroup id="top_header">
			<header>
				Portfolio
			</header>
			<header id="log_out">
				<?php
					if($_SESSION['authenticated'] == TRUE)
					{
						print("<a href='logout.php'>Log out</a>");
					}
				?>
			</header>
		</hgroup>
		
		<nav id="navigation">
			<ul>
				<a href="#About_Me">
					<li>
						About Me
					</li>
				</a>
				<a href="#Skills_and_Achievements">
					<li>
						Skills and Achievements
					</li>
				</a>
				<a href="#Education_and_Qualifications">
					<li>
						Education and Qualifications
					</li>
				</a>
				<a href="#Experience">
					<li>
						Experience
					</li>
				</a>
				<a href="#Portfolio">
					<li>
						Portfolio
					</li>
				</a>
				<a href="#Contact">
					<li>
						Contact
					</li>
				</a>
				<a href="#Blog">
					<li>
						Blog
					</li>
				</a>
			</ul>
		</nav>
		
		<article id="article"></article>
			<section id="About_Me">
				<header>
					<a href="about_me.html">
						About Me
					</a>
				</header>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
				</p>
			</section>
			<section id="Skills_and_Achievements">
				<header>
					Skills and Achievements
				</header>
				<p>
					Maecenas porttitor congue massa.
				</p>
			</section>
			<section id="Education_and_Qualifications">
				<header>
					Education and Qualifications
				</header>
				<p>
					Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
				</p>
			</section>
			<section id="Experience">
				<header>
					Experience
				</header>
				<p>
					Nunc viverra imperdiet enim.
				</p>
			</section>
			<section id="Portfolio">
				<header>
					Portfolio
				</header>
				<p>
					Fusce est. Vivamus a tellus.
				</p>
			</section>
			<section id="Contact">
				<header>
					<a href="contact.html">
						Contact
					</a>
				</header>
				<p>
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
				</p>
			</section>
			<section id="Blog">
				<header>
					Blog
				</header>
			</section>
		
		<aside id="aside">
			<?php
				if($_SESSION['authenticated'] == TRUE)
				{
					echo "Logged In as $_SESSION['current_user']";
				}
			?>
			<form method="POST" action="login.php">
				<div>
					<label>
						Username
					</label>
					<input type="text" name="username" required>
				</div>
				<div>
					<label>
						Password
					</label>
					<input type="password" name="password" minlength="8" required>
				</div>
				<div>
					<input type="submit" class="button" value="Submit">
					<input type="reset" class="button" value="Clear Form">
				</div>
			</form>
		</aside>
		
		<footer id="footer">
			<p>
				Footer
			</p>
		</footer>
	</body>
</html>