<?php
    session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/style.css" />
		<link rel="stylesheet" media="screen" type="text/css" title="design" href="src/css/header.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
	<?php
		include ("src/www/corps.php");
	?>
	<script src="src/assets/js/jquery-3.3.1.min.js"></script>
	<script src="src/assets/js/login.js"></script>
	</body>
</html>