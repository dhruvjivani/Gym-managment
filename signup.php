<!DOCTYPE html>
<html>

<head>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

	<header>
		<nav>
			<div class="main-wrapper">
				<section class="main-container">
					<div class="main-wrapper">
						<h2 style="margin-top: 35px;">signup</h2>
						<form class="signup-form" action="includes/signup.inc.php" method="POST">
							<input type="text" name="first" placeholder="firstname">
							<input type="text" name="last" placeholder="lastname">
							<input type="text" name="email" placeholder="e-mail">
							<input type="text" name="uid" placeholder="username">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">sign up</button>
						</form>
					</div>
				</section>

			</div>
		</nav>
	</header>
</body>

</html>