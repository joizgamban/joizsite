<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>

<html>
<head>
    <title>JOIZ WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<nav>
    <div class="logo">
		<img src="LogoMakr_2l7YJB.png">
    </div>
    <ul class="log">
		<li class="active"><a href="welcome.php">HOME</a></li>
		<li><a href="">ABOUT US</a></li>
    </ul>
</nav>
<hr>
    <div class="container">
    <a class="float-right" href="logout.php">LOGOUT</a>
    <h1>WELCOME <?php echo $_SESSION['username']; ?>!</h1>
    </div>

    <div class="button">
			<a href="login.html" class="btn">LOG IN</a>
			<a href="signup.html" class="btn">SIGN UP</a>
		</div>
</body>
</html>