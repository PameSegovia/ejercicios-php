<?php

	if($_POST){
		$valorA=$_POST['valorA'];
		$valorB=$_POST['valorB'];
		
		//Sumando
		$suma=$valorA+$valorB;
<<<<<<< HEAD
		$resta=$valorA-$valorB;
		$division=$valorA/$valorB;
		$multiplica=$valorA*$valorB;
		echo"<br/>".$suma;
		echo "<br/>".$resta;
		echo "<br/>".$division;
		echo "<br/>".$multiplica;		
=======
		echo $suma;
>>>>>>> 6ca57d0e78e5b1fc2ab5712a3ed22c6a36ace1a0

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
<<<<<<< HEAD
	<form action="ejercicio9.php" method="post" > 
=======
	<form action="ejercicio8.php" method="post" > 
>>>>>>> 6ca57d0e78e5b1fc2ab5712a3ed22c6a36ace1a0
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