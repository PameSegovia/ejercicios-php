<?php
 $txtNombre="";
 $rdgLenguaje="";

 $chkphp="";
 $chkhtml="";
 $chkcss="";

 $lsAnime="";


 if($_POST){
	$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
	$rdgLenguaje=(isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

	$chkphp=(isset($_POST['chkphp'])=="si")?"checked":"";
  $chkhtml=(isset($_POST['chkhtml'])=="si")?"checked":"";
  $chkcss=(isset($_POST['chkcss'])=="si")?"checked":"";

	$lsAnime=(isset($_POST['lsAnime']))?$_POST['lsAnime']:"";

	print_r($_POST);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
</head>
<body>
	<?php if($_POST){ ?>
	<strong>¡Hola!</strong> <?php echo $txtNombre;?>
	<br/>
	<strong>Tu Lenguaje es:</strong> <?php echo $rdgLenguaje;?>
	<br/>
	<strong>Estás aprendiendo:</strong><br/>
	<?php echo ($chkphp=="checked")?"PHP":"";?>	<br/>
	<?php echo ($chkhtml=="checked")?"HTML":"";?>	<br/>
	<?php echo ($chkcss=="checked")?"CSS":"";?>	<br/>
	
	<strong>Tu Serie Favorita es:</strong> 
	<?php echo $lsAnime;?>

	<?php } ?>

	<form action="datos-del-form.php" method="post">
		Nombre:<br/>
		<br/>
	<input value="<?php echo $txtNombre;?>"  type="text" name="txtNombre" id="">
	<br/>
	<br/>
	
	¿Te gusta? :<br/>
	<br/>php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"";?>   name="lenguaje" value="php" id=""><br/>
	<br/>html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":"";?>   name="lenguaje" value="html" id=""><br/>
	<br/>css: <input type="radio"  <?php echo ($rdgLenguaje=="css")?"checked":"";?>  name="lenguaje" value="css" id=""><br/>
	<br/>

	Estás Aprendiendo...<br/>
	<br/>php <input type="checkbox" <?php echo $chkphp?> name="chkphp" value="si" id="">
	<br/>html  <input type="checkbox" <?php echo $chkhtml?>  name="chkhtml" value="si" id="">
	<br/>css <input type="checkbox" <?php echo $chkcss?>  name="chkcss" value="si" id="">
	<br/>

	¿Qué Ánime te gusta?...<br/>
	<select name="lsAnime" id="">
		<option value="ninguna">[Ninguna Serie]</option>
		<option value="naruto" <?php echo($lsAnime=="naruto")?"selected":""; ?> >NARUTO</option>
		<option value="bleach" <?php echo($lsAnime=="bleach")?"selected":""; ?>>BLEACH</option>
		<option value="dragonBall"<?php echo($lsAnime=="dragonBall")?"selected":""; ?> >DRAGON BALL</option>
	</select>

	<input type="submit" value="Enviar Información">

	</form>
</body>
</html>