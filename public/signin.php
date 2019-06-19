<?php
	session_start();
	var_dump($_SESSION);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Joey Endicott's CS 516 Project</title>
		<meta name="viewport" content="width=device-width, initial scale=1">
		<link href="css/project.css" type="text/css" rel="stylesheet" />
	</head>

	<body>

		<header>
			<h2>Joey Endicott's CS 516 Project</h2>
		</header>

		<section>
			<div id="nav">
				<ul>
					<li><a href ="index.php">Home Page</a></li>
					<li><a href ="thichnhathanh.php">Thich Nhat Hanh</a></li>
					<li><a href ="hiking.php">Hiking</a></li>
					<li><a href ="quotes.php">Quotes</a></li>
					<li><a href ="hierarchy.php">Site Hierarchy</a></li>
					<li><a href ="signin.php">Sign in</a></li>
					<li><a href ="registration.php">Registration</a></li>				</ul>
			</div>

			<div id="article">
				<h1>Sign in</h1>
				<p>Please sign in if you have an account, or register if you are new here.</p>

				<form method="POST" id="signinform" action="/signin_action_page.php">
				<label for="username">Username:</label><br>
				<input type="text" id="username" name="username" maxlength="50" required>
				<br>
				<label for="password">Password:</label><br>
				<input type="password" id="password" name="password" maxlength="128" required>
				<br><br>
				<input type="submit" value="Sign In">
				</form>
				<br><br>
			</div>
			
		</section>

		<footer>
			<p>Copyright Joey Endicott 2019</p>
		</footer>

	</body>
</html>