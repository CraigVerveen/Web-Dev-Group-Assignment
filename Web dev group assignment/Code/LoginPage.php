<!-- Page for user with an account to enter their name,email and date of birth-->
<!-- NEED TO INPUT CODE TO MAKE SURE THEY ARE ALREAY SIGNED UP (PHP CAN'T DO YET)-->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
		
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><!--used to format the datepicker-->
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
		<title>The Library</title>
	</head>
	
	<body>
		<script src="Scripts/site.js"></script>
		<div id="main">
			<header>
				<img src="Images/library.jpg" alt="library"/>
			</header>
			
			<nav>
				<ul>
					<li><a href="HomePage.html">Home</a></li>
					<li><a href="SearchPage.html">Search</a></li>
					<li><a href="LoginPage.php">Log in</a></li>
					<li><a href="SignupPage.php">Become a member</a></li>
					<!--<li><a href="ProfilePage.html">Your profile</a></li>-->
				</ul>
			</nav>
			
			<div id="content">
				<section class="contentSection">
					<h1>PLEASE LOGIN</h1>
					<br>
					<form name="personal_info" id="personal_info">
						<table align="center" border="0"><tbody>
							<tr>
								<td class="name">
									Name:
								</td>
								<td class="data">
									<input type="text" name="name_text" id="name_text" width="20" maxlength="40" size="20" required>
								</td>
							</tr>
							<tr>
								<td class="name">
									E-mail address:
								</td>
								<td class="data">
									<input type="email" name="email_text" id="email_text" width="20" maxlength="40" size="20" required>
								</td>
							</tr>
							<tr>
								<td class="name">
									Date of Birth (DD/MM/YYYY):
								</td>
								<td class="data">
									<input type="text" id="datepicker">
								</td>
							</tr>
							<tr>
								<td class="name">
									Password:
								</td>
								<td class="data">
									<input type="text" name="password_text" id="password_text" width="6" size="6" maxlength="20" required>
								</td>
							</tr>
							<tr>
								<td class="name">
									<input type="button" value="Submit" id="login"> 
								</td>
							</tr>
						</tbody></table>
						
						<?php require 'DbConnection/connection.php';?>
					</form>
				</section>
			</div>
			
			<footer>
				Site by: Jennifer Nolan &copy; 2018
			</footer>
		</div>
	</body>
</html>