<?
	$host = "localhost";
	$user = "TT"; //PLAATS TUSSEN DE " " UW GEBRUIKERSNAAM.
	$password = "filmpje"; //PLAATS TUSSEN DE " " UW WACHTWOORD.
		
	$con = mysql_connect($host, $user, $password);
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }

		mysql_select_db("TT", $con);
?>