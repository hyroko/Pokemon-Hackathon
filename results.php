<?php
	session_start();
?>

<html>
<body>

	
	<?php 
	$z = $_POST["challenged"];
	$z;
	$y = $_POST["cnum"];
	$y--;
	echo nl2br($_SESSION["champions"][$z][0] . " VS " .  $_POST["cname"] .
	"\n");?>
	Who won?
	<form action = "confirm.php" method = "get">
		<input type = "radio" name = "winner" value = "champion"> 
		<?php echo $_SESSION["champions"][$z][0] ?><br>
		<input type = "radio" name = "winner" value = "challenger">
		<?php echo $_POST["cname"] ?><br><br>
		Check if pokemon fainted during battle <br> <br>
		
		<?php echo nl2br($_SESSION["champions"][$z][0] . "'s pokemon" . "\n")?>
		<input type="checkbox" name="status1" value= "1">
		<?php echo $_SESSION["champions"][$z][1] ?><br>
		<input type="checkbox" name="status2" value= "2">
		<?php echo $_SESSION["champions"][$z][2] ?><br>
		<input type="checkbox" name="status3" value= "3">
		<?php echo $_SESSION["champions"][$z][3] ?><br>
		<input type="checkbox" name="status4" value= "4">
		<?php echo $_SESSION["champions"][$z][4] ?><br>
		<input type="checkbox" name="status5" value= "5">
		<?php echo $_SESSION["champions"][$z][5] ?><br>
		<input type="checkbox" name="status6" value= "6">
		<?php echo $_SESSION["champions"][$z][6] ?><br>
			
		
		<?php echo nl2br($_SESSION["challengers"][$y][0] . "'s pokemon" . "\n")?>
		<input type="checkbox" name="status7" value= "7">
		<?php echo $_SESSION["challengers"][$y][2] ?><br>
		<input type="checkbox" name="status8" value= "8">
		<?php echo $_SESSION["challengers"][$y][3] ?><br>
		<input type="checkbox" name="status9" value= "9">
		<?php echo $_SESSION["challengers"][$y][4] ?><br>
		<input type="checkbox" name="status10" value= "10">
		<?php echo $_SESSION["challengers"][$y][5] ?><br>
		<input type="checkbox" name="status11" value= "11">
		<?php echo $_SESSION["challengers"][$y][6] ?><br>
		<input type="checkbox" name="status12" value= "12">
		<?php echo $_SESSION["challengers"][$y][7] ?><br>
		
	<input type="submit">	
	</form>
	
	
	<a href = "home.php"> Return to homepage </a>
	
</body>
</html>
