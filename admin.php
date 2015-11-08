<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>

<a href = "home.php"> Logout </a>

<h3> Challenger status: </h3>
<?php
	
	$arraylength = count($_SESSION["challengers"]);
	echo "Total number of challengers:" . $arraylength;
?>
<br>
<table style="width:100%">
	<tr>
		<th> Gym Leader 1 </th>
		<th> Gym Leader 2 </th>
		<th> Gym Leader 3 </th>
		<th> Gym Leader 4 </th>
		<th> Gym Leader 5 </th>
		<th> Gym Leader 6 </th>
		<th> Gym Leader 7 </th>
		<th> Elite Four Member 1 </th>
		<th> Elite Four Member 2 </th>
		<th> Elite Four Member 3 </th>
		<th> Elite Four Member 4 </th>
	</tr>
	<tr>
		<td> <?php echo nl2br($_SESSION["champions"][0][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][0]); $x++)
		{
			echo nl2br($_SESSION["champions"][0][$x] ."\n");
		}
		?></td>		
		<td> <?php echo nl2br($_SESSION["champions"][1][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][1]); $x++)
		{
			echo nl2br($_SESSION["champions"][1][$x] ."\n");
		}
		?></td>
		<td> <?php echo nl2br($_SESSION["champions"][2][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][2]); $x++)
		{
			echo nl2br($_SESSION["champions"][2][$x] ."\n");
		}
		?> </td>
		<td> <?php echo nl2br($_SESSION["champions"][3][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][3]); $x++)
		{
			echo nl2br($_SESSION["champions"][3][$x] ."\n");
		}
		?> </td>
		<td> <?php echo nl2br($_SESSION["champions"][4][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][4]); $x++)
		{
			echo nl2br($_SESSION["champions"][4][$x] ."\n");
		}
		?> </td>
		<td> <?php echo nl2br($_SESSION["champions"][5][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][5]); $x++)
		{
			echo nl2br($_SESSION["champions"][5][$x] ."\n");
		}
		?> </td>
		<td> <?php echo nl2br($_SESSION["champions"][6][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][6]); $x++)
		{
			echo nl2br($_SESSION["champions"][6][$x] ."\n");
		}
		?> </td>
		<td> <?php echo nl2br($_SESSION["champions"][7][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][7]); $x++)
		{
			echo nl2br($_SESSION["champions"][7][$x] ."\n");
		}
		?> </td>
		<td> <?php echo nl2br($_SESSION["champions"][8][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][8]); $x++)
		{
			echo nl2br($_SESSION["champions"][8][$x] ."\n");
		}
		?> </td>
		<td> <?php echo nl2br($_SESSION["champions"][9][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][9]); $x++)
		{
			echo nl2br($_SESSION["champions"][9][$x] ."\n");
		}
		?> </td>
		<td> <?php echo nl2br($_SESSION["champions"][10][0] . "\n\n");
		for ($x = 1; $x < count($_SESSION["champions"][10]); $x++)
		{
			echo nl2br($_SESSION["champions"][10][$x] ."\n");
		}
		?> </td>
	</tr>
		
</table>
<br>


<?php
	$x = 0;
	while($x < count($_SESSION["challengers"]))
	{
		echo nl2br("Challenger number: " . ($x+1) . "\n");
		echo nl2br("Challenger name: " . $_SESSION["challengers"][$x][0] . "\n");
		echo nl2br("Challenging: " . $_SESSION["challengers"][$x][1] . "\n");
		echo nl2br("Pokemon lineup:\n 1: " . $_SESSION["challengers"][$x][2] . "\n 2: " .
		$_SESSION["challengers"][$x][3] . "\n 3: " . $_SESSION["challengers"][$x][4] 
		. "\n 4: " . $_SESSION["challengers"][$x][5] . "\n 5: ".$_SESSION["challengers"][$x][6].
		"\n 6: " . $_SESSION["challengers"][$x][7] . "\n\n");
		$x++;
	}
?>

<form action="results.php" method="post">
	Who is being challenged?
	<select name="challenged">
	<option value="0"><?php echo $_SESSION["champions"][0][0]?></option>
	<option value="1"><?php echo $_SESSION["champions"][1][0]?></option>
	<option value="2"><?php echo $_SESSION["champions"][2][0]?></option>
	<option value="3"><?php echo $_SESSION["champions"][3][0]?></option>
	<option value="4"><?php echo $_SESSION["champions"][4][0]?></option>
	<option value="5"><?php echo $_SESSION["champions"][5][0]?></option>
	<option value="6"><?php echo $_SESSION["champions"][6][0]?></option>
	<option value="7"><?php echo $_SESSION["champions"][7][0]?></option>
	<option value="8"><?php echo $_SESSION["champions"][8][0]?></option>
	<option value="9"><?php echo $_SESSION["champions"][9][0]?></option>
	<option value="10"><?php echo $_SESSION["champions"][10][0]?></option>
	</select>
	<br>
	<br>
	Who is challenging?
	<br>
	<br>
	Name: <input type = "text" name = "cname"> <br>
	Challenger Number: <input type = "text" name = "cnum"><br>
	<input type="submit">
	</form>
	

</body>
</html> 
