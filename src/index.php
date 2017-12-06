<?php

include_once('config.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo($ini_file["app_name"]); ?>
	</title>
	<meta charset="UTF-8" />
	<link type="text/css" rel="stylesheet" href="style/main.css" />
	<link type="text/css" rel="stylesheet" href="style/button.css" />
	<link type="text/css" rel="stylesheet" href="style/icomoon.css" />
</head>
<body>
	<form method="get" action="sentaker.php">
		<input name="action" type="hidden" value="edit" />
		<input name="code" type="text" value="" placeholder="C0086" /><br />
		<button type="submit">Go</button>
	</form>
	<form method="get" action="sentaker.php">
		<input name="code" type="text" value="" placeholder="C0086" />
		<input name="action" type="hidden" value="create" />
		<br />
		<button type="submit">Create new one</button>
	</form>
	<footer>
		<h3>Hosted by <a href="http://fermedufariol.fr">La ferme du Fariol</a>, thanks to Denis Sicard.</h3>
	</footer>
</body>
</html>
