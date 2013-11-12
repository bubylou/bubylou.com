<!DOCTYPE html>
<html>
  
<head>
	<title>bubylou.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<?php
	$dir = "movies.link";
	$id = $_GET['id'];
	echo '<video class="center" src="'.$dir.'/'.$id.'/'.$id.'.mp4" autoplay="" controls=""/>';
	?>

	<style>
	body {
		background-image:url('<?php echo "$dir/$id/$id-fanart.jpg" ?>');
		vertical-align: middle;
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
