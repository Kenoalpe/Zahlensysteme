<!DOCTYPE html>
<html>
<head>
	<title>Zahlensysteme Rechner</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
	include('funktionen.php');
	?>
</head>
<body>

<form action="" method="post">
	<div class="main">

		
		<select class="all o a" id="select0" name="von">
			
			<option value = "binar" <?php if($_POST['von'] == 'binar'){ ?> selected <?php } ?> data-placeholder="MSB &rArr; LSB">Bin&aumlr</option>
			<option value = "dezimal" <?php if($_POST['von'] == 'dezimal'){ ?> selected <?php } ?> data-placeholder="" >Dezimal</option>
			<option value = "duodezimal" <?php if($_POST['von'] == 'duodezimal'){ ?> selected <?php } ?> data-placeholder="" >Duodezimal</option>
			<option value = "hexadezimal" <?php if($_POST['von'] == 'hexadezimal'){ ?> selected <?php } ?> data-placeholder="" >Hexadezimal</option>

		</select>
		<input type="text" class="all i a" id="input0" placeholder="MSB &rArr; LSB" name="eingabe" value="<?php echo htmlspecialchars($_POST["eingabe"]); ?>">

		<select class="all o b" id="select1" name ="nach">
			
			<option value = "binar" <?php if($_POST['nach'] == 'binar'){ ?> selected <?php } ?> >Bin&aumlr</option>
			<option value = "dezimal" <?php if($_POST['nach'] == 'dezimal'){ ?> selected <?php } ?> >Dezimal</option>
			<option value = "duodezimal" <?php if($_POST['nach'] == 'duodezimal'){ ?> selected <?php } ?> >Duodezimal</option>
			<option value = "hexadezimal" <?php if($_POST['nach'] == 'hexadezimal'){ ?> selected <?php } ?> >Hexadezimal</option>

		</select>

		<div class="all i b" > <?php  umrechnen($eingabe,$von,$nach) ?> </div>

		<input type="submit" name="" class="all i c" value="&#9660; Berechnen &#9660;">
		

	</div>
</form>

<script type="text/javascript" src="javascript.js"></script>

</body>
</html>