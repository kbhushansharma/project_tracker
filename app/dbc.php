<?php
$con = mysql_connect("localhost", "root", "password");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

$db = mysql_select_db("project_tracker", $con) or die("Couldn't select database");
?>
