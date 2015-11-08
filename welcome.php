<?php
	session_start();
?>

<html>
<body>

	
	<?php
	$challenger = array($_POST["name"],$_POST["position"], $_POST["pokemon1"],
	$_POST["pokemon2"],$_POST["pokemon3"],$_POST["pokemon4"],$_POST["pokemon5"],
	$_POST["pokemon6"]);
	
	$arraylength = count($_SESSION["challengers"]);
	$_SESSION["challengers"][$arraylength] = $challenger;
	$_SESSION["challenger"] = $challenger;
	?>
	
	Welcome <?php echo $_POST["name"]; ?><br>
	You are challenging: <?php echo $_POST["position"]; ?> for his/her position
	<br>
	Here is your list of pokemon: 
	<br>
	1: <?php echo $_POST["pokemon1"]; ?><br>
	2: <?php echo $_POST["pokemon2"]; ?><br>
	3: <?php echo $_POST["pokemon3"]; ?><br>
	4: <?php echo $_POST["pokemon4"]; ?><br>
	5: <?php echo $_POST["pokemon5"]; ?><br>
	6: <?php echo $_POST["pokemon6"]; ?><br>
	<br>
	Good Luck!
	<br>
	<br>
	
	
	<a href = "home.php"> Return to homepage </a>
	
</body>
</html>

