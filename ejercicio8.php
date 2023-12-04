<?php

	if($_POST){
		$valorA=$_POST['valorA'];
		$valorB=$_POST['valorB'];
		
		//Sumando
		$suma=$valorA+$valorB;
		echo $suma;

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Operadores Aritméticos</title>
</head>
<body>
	<form action="ejercicio8.php" method="post" > 
		VALOR P:
	<input type="text" name="valorA" id="">
	<br/>
		VALOR B:
	<input type="text" name="valorB" id="">
	<br/>
	<input type="submit" value="Calcular">
	</form>
</body>

</html>