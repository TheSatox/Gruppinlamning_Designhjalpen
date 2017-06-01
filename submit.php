<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_designhjalpen";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO input (inputFirstname, inputLastname, inputEmail, inputCity, inputOrgname, inputUrl, inputDesc)


VALUES ('$_POST[inputFirstname]', '$_POST[inputLastname]', '$_POST[inputEmail]', '$_POST[inputCity]', '$_POST[inputOrgname]', '$_POST[inputUrl]', '$_POST[inputDesc]')";


if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="sv">

<head>

	<meta charset="utf-8">
	<title>Designhjälpen</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="script.js"></script>

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="icon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="icon/manifest.json">
	<link rel="mask-icon" href="icon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="icon/favicon.ico">
	<meta name="msapplication-config" content="icon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

</head>

<body>

	<!-- Header -->
	<header class="navbar-fixed-top parallax">

		<div class="unselectable">

			<img id="logo" src="img/design-hjalpen-logo-5.png">

		</div>

	</header>

	<!-- Content -->

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<h1 class="title">Om oss</h1>
				<br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
					dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing
					elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
					dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>

        </div>

    </div>
		
<footer>
	<a href="http://www.twitter.com"><object style="vertical-align:middle" type="image/svg+xml" data="img/twitter.svg" width="32px" height="32px">
		Your browser doesn't support SVG.
	</object> <b>TWITTER</b></a>
	<a href="http://www.facebook.com"><object class="spacing" style="vertical-align:middle" type="image/svg+xml" data="img/facebook.svg" width="32px" height="32px">
		Your browser doesn't support SVG.
	</object> <b>FACEBOOK</b></a>
	<b class="spacing">Gjort av: Dino Felarca, Oscar Eriksson, Richard Norman</b>
</footer>
    
</body>

</html>
