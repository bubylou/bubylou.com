<!DOCTYPE html>
<html>
  
<head>
	<title>bubylou.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
	<?php
	$dir = "movies.link";
	$names = preg_grep('/^([^.])/', scandir($dir));
	foreach($names as $name) {
	echo '<a href="'.$dir.'/'.$name.'/'.$name.'.mp4'.'"><img src="'.$dir.'/'.$name.'/'.$name.'-web.jpg'.'"/></a>'; 
	}
	?>
</body>

</html>
