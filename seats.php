<?php
  $aStoel = $_POST['stoel'];
  $N = count($aStoel);
  $string = "";
  $db = "";
  if(empty($aStoel))
  {
    echo("You didn't select any seats.");
  }
  else if ($N > 10)
  {
	echo("You have selected too many seats.");
  }  
  else
  {
	$rng = rand(5,1000);
	
	include('config.php');
	
		$sql="INSERT INTO data (resNummer, film, datum, tijd)
		VALUES
		('$rng','Ted','2012-12-12','12:45')";
	mysql_query($sql);

	foreach ($aStoel as $selected) {
			$sql2 = "INSERT INTO rc (res_id, chairnr)
						VALUES ('$rng', '$selected')";
			mysql_query($sql2);
		}
		

    echo("U heeft $N stoelen gereserveerd: ");
	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo("Met een totaalprijs van ");
	$result = "SELECT SUM(price)
				FROM (
					SELECT stoelen.stoelnr, stoelen.cat_id
					FROM stoelen
					INNER JOIN rc
					ON stoelen.stoelnr = rc.chairnr
					WHERE res_id=" . $rng . " 
					) AS X
				INNER JOIN cat
				ON cat_id = id";
	$lol = mysql_query($result);
	$qd = mysql_fetch_array($lol);
	$total = (double) $qd["SUM(price)"];
	echo $total;
	echo " euro.";
	
	mysql_close($con);	
	}
?>