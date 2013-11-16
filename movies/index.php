<!DOCTYPE html>
<html>
  
<head>
	<title>bubylou.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">

	<?php
	$dir = "movies.link";
	$names = preg_grep('/^([^.])/', scandir($dir));

	foreach($names as $name) {
		$file = "$dir/$name/$name";
		$info = file_get_contents($file . ".nfo");
		preg_match_all('/="(.*?)w342(.*?)\.jpg/', $info, $text);
		$url = str_replace("=\"", "", $text[0]);
		echo '<a href="movie.php?id='.$name.'"><img src="'.$url[0].'"/></a>';
	}
	?>
</head>
 
<body>

</body>

</html>
