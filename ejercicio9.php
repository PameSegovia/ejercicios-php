<?php

	if($_POST){
		$valorA=$_POST['valorA'];
		$valorB=$_POST['valorB'];
		
		//Sumando
		$suma=$valorA+$valorB;
		$resta=$valorA-$valorB;
		$division=$valorA/$valorB;
		$multiplica=$valorA*$valorB;
		echo"<br/>".$suma;
		echo "<br/>".$resta;
		echo "<br/>".$division;
		echo "<br/>".$multiplica;		

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
	<form action="ejercicio9.php" method="post" > 
		VALOR A:
	<input type="text" name="valorA" id="">
	<br/>
		VALOR B:
	<input type="text" name="valorB" id="">
	<br/>
	<input type="submit" value="Calcular">
	</form>
</body>

</html>