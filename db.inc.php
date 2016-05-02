<?php

define("HOST", "localhost");
// Database user
define("DBUSER", "root");
// Database password
define("PASS", "");
// Database name
define("DB", "webpitch");
$conn = mysql_connect(HOST, DBUSER, PASS) or  die('Could not connect !<br />Please contact the site\'s administrator.');
$db = mysql_select_db(DB) or  die('Could not connect to database !<br />Please contact the site\'s administrator.');

?>
