<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $pageTitle; ?></title>
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- <link rel="stylesheet" href="css/style.css"> -->
		<style type="text/css"><?php include 'css/style.css'; ?></style>
	</head>
	<body>
		<header>
			<nav>
				<ul id="nav">
					<li><a href="index.php"><span class="fa fa-home fa-3x"></span> Home</a></li>
					<li><a href="catalog.php?type=books"><span class="fa fa-book fa-3x"></span> Books</span></a></li>
					<li><a href="catalog.php?type=movies"><span class="fa fa-film fa-3x"></span> Movies</a></li>
					<li><a href="catalog.php?type=music"><span class="fa fa-music fa-3x"></span> Music</a></li>
					<li><a href="suggest.php"><span class="fa fa-gear fa-3x"></span> Suggession</a></li>
				</ul>
			</nav>
		</header>
