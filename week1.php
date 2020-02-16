<!DOCTYPE html>
<html>
<head>
	<title>Goede morgen/middag/avond/nacht</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body onload="startTime()">



<?php

	date_default_timezone_set("Europe/Amsterdam");

	if (date("H") <= 6) {
		echo "<div id = 'nacht'></div>";
		echo "<div id = 'text'>Goede nacht</div>";
	} elseif (date("H") <= 12) {
		echo "<div id = 'morgen'></div>";
		echo "<div id = 'text'>Goede morgen</div>";
	} elseif (date("H") <= 18) {
		echo "<div id = 'middag'></div>";
		echo "<div id = 'text'>Goede middag</div>";	
	} else {
		echo "<div id = 'avond'></div>";
		echo "<div id = 'text'>Goede avond</div>";
	}

	echo "<div id = 'tijd'>Het is nu " , date("H:i") , "</div>";
?>
<script src="js.js"></script>
</body>
</html>