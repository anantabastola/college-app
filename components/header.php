<?php
	ob_start();
	$currentPage = substr($_SERVER['REQUEST_URI'],12);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
      <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<header>
	<div class="toggle">
		<img src="res/hamburger.png" alt="icon">
	</div>
	<div class= "menu">
		<a class="brand" href="home.php">APP SERVER</a>
	</div>
	<?php 
	if (!isset($_SESSION["login_user"])){
		echo '
		<nav>
			<ul>
			<li><a class="'.($currentPage == "teachers.php" ? "active" : "inactive").'" href="teachers.php">Teachers</a></li>
			<li><a class="'.($currentPage == "events.php" ? "active" : "inactive").'" href="events.php">Events</a></li>
			</ul>
		</nav>';
	  }else{
		echo '
		<nav>
			<ul>
				<li><a class="'.($currentPage == "add_teachers.php" ? "active" : "inactive").'" href="add_teachers.php">Teachers</a></li>
				<li><a class="'.($currentPage == "resources.php" ? "active" : "inactive").'" href="resources.php">Resources</a></li>
				<li><a class="'.($currentPage == "results.php" ? "active" : "inactive").'" href="results.php">Result</a></li>
				<li><a class="'.($currentPage == "add_events.php" ? "active" : "inactive").'"  href="add_events.php">Events</a></li>
				<li><a class="'.($currentPage == "notices.php" ? "active" : "inactive").'"  href="notices.php">Notices</a></li>
				<li><a class="danger" href="logout.php">Logout</a></li>
			</ul>
		</nav>	
		';
	  }
	?>
	
</header>
<div class="content">    