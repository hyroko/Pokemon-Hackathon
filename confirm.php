<?php
	session_start();
?>

<html>
<body>

	
	<?php
	$battle = array($_POST["winner",$_POST["status1"], $_POST["status2"],
	$_POST["status3"],$_POST["status4"],$_POST["status5"],$_POST["status6"],
	$_POST["status7"],$_POST["status8"],$_POST["status9"],$_POST["status10"],
	$_POST["status11"],$_POST["status12"]);
	
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

