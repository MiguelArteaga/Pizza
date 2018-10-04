<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="FormularioPizza.php">
	<?php
	echo "Ingredientes: <br><br>";
	echo "<input type='checkbox' name='massa'/>";
	echo "Massa<br>";
	echo "<input type='checkbox' name='oregan'/>";
	echo "Oregan<br>";
	echo "<input type='checkbox' name='queso'/>";
	echo "Queso<br>";
	echo "<input type='checkbox' name='piña'/>";
	echo "Piña<br>";
	echo "<input type='checkbox' name='bacon'/>";
	echo "Bacon<br>";
	echo "<input type='checkbox' name='tomate'/>";
	echo "Tomate<br>";
	echo "<input type='checkbox' name='olivas'/>";
	echo "Olivas<br>";

	if(isset($_post["massa"])) {
		echo "hola"
	}

	?> 
<input type="submit"/>
</form>

</body>
</html>