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
					<li><a href ="registration.php">Registration</a></li>				
				</ul>
			</div>

			<div id="article">
				<h1>Registration</h1>
				<p>Please sign in if you have an account, or register if you are new here.</p>

				<form method="POST" id="regform" action="/registration_action_page.php">
				<label for="username">Choose username:</label><br>
				<input type="text" id="username" name="username" maxlength="50" required value="<?= $_SESSION['presets']['username'] ?>">
					<?php if(isset($_SESSION['errors']['username'])) { ?>
						<span id="usernameError" class="error"><?= $_SESSION['errors']['username'] ?></span>
					<?php } ?>
				<br>

				<label for="email">Email:</label><br>
				<input type="email" id="email" name="email" maxlength="50" required value="<?= $_SESSION['presets']['email'] ?>">
					<?php if(isset($_SESSION['errors']['email'])) { ?>
						<span id="emailError" class="error"><?= $_SESSION['errors']['email'] ?></span>
					<?php } ?>
				<br>

				<label for="password"> Choose password:</label><br>
				<input type="password" id="password" name="password" maxlength="128" >
					<?php if(isset($_SESSION['errors']['password'])) { ?>
						<span id="passwordError" class="error"><?= $_SESSION['errors']['password'] ?></span>
					<?php } ?>
				<br>

				<label for="password_match">(Retype password:)</label><br>
				<input type="password" id="password_match" name="password_match" maxlength="128" >
					<?php if(isset($_SESSION['errors']['password_match'])) { ?>
						<span id="passwordMatchError" class="error"><?= $_SESSION['errors']['password_match'] ?></span>
					<?php } ?>
				<br><br>

				<input type ="submit" value="Register">
				</form>
			</div>
			
		</section>

		<footer>
			<p>Copyright Joey Endicott 2019</p>
		</footer>

	</body>
</html>