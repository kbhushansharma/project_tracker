<?php

include 'dbc.php';

function getProjects() {
	$projs = array();
	$result = mysql_query("SELECT * FROM project");

	while($row = mysql_fetch_array($result))
	{
		$projs[] = $row['name'];
	}
	return json_encode($projs);
}

?>