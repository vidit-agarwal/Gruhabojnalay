<?php
	include('includes/top.php');
?>
<!DOCTYPE html>
<html>
	<head>
			<link href="css/userStyle.css" rel="stylesheet" />
			<meta charset='UTF-8'>
			<script src="js/jquery-1.11.3.min.js"></script>
	</head>
<body>

	<?php
		show();
	?>
	<div id="contactusb">
	<?php
		echo $_POST['name']."</br>";
		echo $_POST['daddress']."</br>";
		echo $_POST['food'];
	?>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>

	<footer>
		<nav><a>Gruhabojanaly Copyright © </a></nav>
	</footer>
	
</body>
</html>
