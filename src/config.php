<?php

$local = false;

$private_folder = '../../private/csentak';

$ini_file = parse_ini_file(($local ? '' : $private_folder) . 'config.ini');

function getMailContent($name, $project_name, $target_name)
{
	return '
<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
</head>
</html>';
}

?>
