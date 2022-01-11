<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
		<title>Blackspire Document Compendium</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
<?php
if($_SERVER["REMOTE_ADDR"]!="64.25.147.72" && $_SERVER["REMOTE_ADDR"]!="::1"){
echo "<div class=broke>Under construction</div>";
echo $_SERVER["REMOTE_ADDR"];
}
else{






include_once("topnav.php");

}
?>
<iframe src="https://calendar.google.com/calendar/embed?src=2odaprdadv4i3gdp4kagfc8p1k%40group.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</body>
</html>
