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
    <h3> Elements in a list</h3>
    <ul data-role="listview">
      <li> Element 1 </li>
      <li> Element 2 </li>
      <li> Element 3 </li>
      <li> Element 4 </li>
      <li> Element 5 </li>
    </ul>
	<?php
	include 'project.php';
	echo  getProjects();
	?>
  </div>
</div>

</body>

</html> 
