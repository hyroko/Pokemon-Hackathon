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

<?php
	
	$challengers = array();
	$champions = array();
	$champion = array("Brock","Geodude","Onyx","","","","");
	$champions[0] = $champion;
	$champion1 = array("Misty","Staryu","Starmie","","","","");
	$champions[1]  = $champion1;
	$champion2 = array("Lt.Surge","Voltorb","Pikachu","Raichu","","","");
	$champions[2] = $champion2;
	$champion3 = array("Erika","Victreebel","Tangela","Vileplume","","","");
	$champions[3] = $champion3;
	$champion4 = array("Sabrina","Kadabra","Mr.Mine","Venomoth","Alakazam","","");
	$champions[4] = $champion4;
	$champion5 = array("Koga","Koffing","Muk","Koffing","Weezing","","");
	$champions[5] = $champion5;
	$champion6 = array("Blaine","Growlithe","Ponyta","Rapidash","Arcanine","","");
	$champions[6] = $champion6;
	$champion7 = array("Giovanni","Rhyhorn","Nidoqueen","Nidoking","Rhyhorn","","");
	$champions[7] = $champion7;
	$champion8 = array("Lorelei","Dewgong","Cloyster","Slowbro","Jynx","Lapras","");
	$champions[8] = $champion8;
	$champion9 = array("Bruno","Onyx","Hitmonchan","Hitmonleee","Onix","Machamp","");
	$champions[9] = $champion9;
	$champion10 = array("Agatha","Gengar","Golbat","Haunter","Arbok","Gengar","");
	$champions[10] = $champion10;
	$champion11 = array("Lance","Gyrados","Dragonair","Dragonair","Aerodactyl","Dragonite","");
	$champions[11] = $champion11;
	$_SESSION["challengers"] = $challengers;
	$_SESSION["champions"] = $champions;
?>
<a href = "challenge.php"> Sign up for a challenge </a>
<br>
<a href = "login.html"> Admin Login </a>

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



</body>
</html> 
