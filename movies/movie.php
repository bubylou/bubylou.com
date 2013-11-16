<!DOCTYPE html>
<html>
  
<head>
	<title>bubylou.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<?php
	$dir = "movies.link";
	$id = $_GET['id'];
	$file = "$dir/$id/$id";
	$info = file_get_contents($file . ".nfo");
	preg_match_all('/="(.*?)w780(.*?)\.jpg/', $info, $text);
	$url = str_replace("=\"", "", $text[0]);
	echo '<video class="center" src="'.$file.'.mp4" autoplay="" controls=""/>';
	?>

	<style>
	html {
		background-image:url(<?php echo $url[0] ?>); 
		background-size: 100% auto;
		background-repeat:no-repeat;
	}
	.center {
		margin: auto;
		position: absolute;
		top: 0; left: 0; bottom: 0; right: 0;
		overflow: auto;
		height: 75%;
		width: 50%;
	}
	</style>

</head>

<body>

</body>

</html>
