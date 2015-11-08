<?php
session_start();
?>


<html>
<body>

	<form action="welcome.php" method="post">
		Name: <input type="text" name="name"><br>
		<br>
		Who are you challenging?
		<select name="position">
		<option value="Gym Leader 1">Gym Leader 1</option>
		<option value="Gym Leader 2">Gym Leader 2</option>
		<option value="Gym Leader 3">Gym Leader 3</option>
		<option value="Gym Leader 4">Gym Leader 4</option>
		<option value="Gym Leader 5">Gym Leader 5</option>
		<option value="Gym Leader 6">Gym Leader 6</option>
		<option value="Gym Leader 7">Gym Leader 7</option>
		<option value="Elite Four Member 1">Elite Four Member 1</option>
		<option value="Elite Four Member 2">Elite Four Member 2</option>
		<option value="Elite Four Member 3">Elite Four Member 3</option>
	    <option value="Elite Four Member 4">Elite Four Member 4</option>
		</select>
		<br>
		<br>
		Please enter your Pokemon: 
		<br>
		<br>
		1st Pokemon <input type = "text" name =  "pokemon1"><br>
		2st Pokemon <input type = "text" name =  "pokemon2"><br>
		3rd Pokemon <input type = "text" name =  "pokemon3"><br>
		4th Pokemon <input type = "text" name =  "pokemon4"><br>
		5th Pokemon <input type = "text" name =  "pokemon5"><br>
		6th Pokemon <input type = "text" name =  "pokemon6"><br>
	<input type="submit">
	</form>
	
	

</body>
</html> 

