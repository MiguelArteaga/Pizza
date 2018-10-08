<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="FormularioPizza.php">
	<h1>Pide tu Pizza</h1>
	<?php
	$contador=5;
	echo "Ingredientes: <br><br>";
	echo "<input type='checkbox' name='massa' value='massa' />";
	echo "Massa<br>";
	echo "<input type='checkbox' name='oregan' value='oregan'/>";
	echo "Oregan<br>";
	echo "<input type='checkbox' name='queso' value='queso'/>";
	echo "Queso<br>";
	echo "<input type='checkbox' name='piña' value='piña'/>";
	echo "Piña<br>";
	echo "<input type='checkbox' name='champiñones' value='champiñones'/>";
	echo "Bacon<br>";
	echo "<input type='checkbox' name='tomate' value='tomate'/>";
	echo "Tomate<br>";
	echo "<input type='checkbox' name='olivas' value='olivas'/>";
	echo "Olivas<br>";


	if(isset($_POST['massa']) && isset($_POST['oregan'])) {
		$contador=$contador+1;
		if(isset($_POST['queso'])){
			$contador=$contador+0.5;
		}
		if (isset($_POST['piña'])) {
			$contador=$contador+0.5;
		}
		if (isset($_POST['champiñones'])) {
			$contador=$contador+0.5;
		}
		if (isset($_POST['tomate'])) {
			$contador=$contador+0.5;
		}
		if (isset($_POST['olivas'])) {
			$contador=$contador+0.5;
		}
		echo "La Pizza vale: ".$contador;
	}
	else{
		echo "La Massa y la Pizza  son obligatorias!";

		echo"massa.checked";

	}



	?> 
<br><br>
<input type="submit"/>
</form>

</body>
</html>