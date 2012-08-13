<!DOCTYPE html>
<html>
<head>
<title>Projects List</title>
 <meta charset="utf-8">
<meta name="viewport" content="user-scalable=no,width=device-width" />
  <link type="text/css" rel="stylesheet"  href="js/jqm/jquery.mobile.css"/>
  <script src="js/jqm/jquery.js"></script>
  <script src="js/jqm/jquery.mobile.js"></script>
</head>

<body>
 <div data-role="page" id="home">
  <div data-role="header">
    <h1>Home</h1>
  </div>
  <div data-role="content">
  
  </div>
</div>

</body>

</html> 

<script>
	<?php 
		include 'project.php'; 	
		function getProjects_html() {
			$projects =  json_decode(getProjects());
			$projects_html = '<ul id=list data-role=listview data-inset=true>';
			foreach ($projects as $value) {
				$projects_html .= '<li data-icon=delete><a href=#>'.$value.'</a></li>';
			}
			return  utf8_encode($projects_html.'</ul>');
		}

	?>

	var projects_html = 
	$("#home div:jqmData(role=content)").append (" <?php echo getProjects_html();?>");
	$("#list").listview("refresh");
</script>
