<?php

include_once('config.php');

$port = $ini_file["db_port"];
$db = null;

if (strcasecmp($port, "default") == 0)
{
	$db = new mysqli($ini_file["db_host"], $ini_file["db_user"], $ini_file["db_password"], $ini_file["db_name"]);
}
else
{
	$db = new mysqli($ini_file["db_host"], $ini_file["db_user"], $ini_file["db_password"], $ini_file["db_name"], intval($port));
}

if ($db->connect_errno)
{
	mail($ini_file["repl_email"], $ini_file["app_name"] . " - DatabaseError", "The connection to the database failed :\n\tErrno" . $db->errno . "\n\tConnect errno: " . $db->connect_errno
		. "\n\tError: " . $db->error . "\n\tConnect error: " . $db->connect_error);
		
	echo "Sorry, this website is experiencing problems.";
	
	exit;
}

function end_my_db()
{
	if ($db != null)
	{
		$db->close();
	}
}

?>
