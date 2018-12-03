
<!-- Search a database of books using PHP-->
<?php
	if (isset($_POST['submit'])) {
		$connection = new mysqli("localhost","root", "","mydb2");
		$q = $connection ->real_escape_string($_POST['q']);
	$column = $connection->real_escape_string($_POST['column']);
	
	if ($column == "" || ($column != "publishname" && $column != "title" && $column != "author"))
		$column = "publishname";
	
	$sql = $connection->query("SELECT publishname FROM books WHERE $column LIKE '%$q%'");
	if ($sql->num_rows > 0){
		while ($data = $sql->fetch_array())
			echo $data['publishname'] . "<br>";
		
	}else
		echo "Your search doesn't match!";
	}
		

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../CSS/stylesheet.css">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"><!--used to format the datepicker-->
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<title>The Library</title>
	</head>
	
	<body>
		<script src="../Scripts/site.js"></script>
		<div id="main">
			<header>
				<img src="../Images/library.jpg" alt="library"/>
			</header>
			
			<nav>
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="SearchPage.php">Search</a></li>
					<li><a href="LoginPage.php">Log in</a></li>
					<li><a href="SignupPage.php">Become a member</a></li>
					<li><a href="ProfilePage.php">Your profile</a></li>
				</ul>
			</nav>
		
		<form method="post" action="SearchPage.php">
			<input type="text" name ="q" placeholder="Search Books..">
			<select name="column">
				<option value="">Select Filter</option>
				<option value="publishname">Publish Name</option>
				<option value="title">Title</option>
				<option value="author">Author</option>
			</select>
			<input type ="submit" name="submit" value="Find">
		</form>
			
			<footer>
				Site by: Jennifer Nolan &copy; 2018
			</footer>
		</div>
	</body>
</html>
