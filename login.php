<?php if ($_POST['username'] === 'josh' && $_POST['password'] === 'yu') 
	{
		header("Location: admin.php"); /* Redirect browser */
		exit();
		
	} 
	else 
	{
		header("Location: home.php"); /* Redirect browser */
		exit();
	
	}
?>
