<!DOCTYPE html>
<html>
<head>
	<title>show users</title>
</head>
<body>

<h1>
	<?php

	foreach($res as $obj)
	{
		echo $obj->Username. "'s Password is ". $obj->Password. "<br>";
		

	}

	?>
</h1></body>
</html>