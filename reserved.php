<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Filmpje</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
	    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
		<script>
		function target_popup(form) 
		{
			window.open('', 'formpopup', 'width=500,height=350,resizeable,scrollbars');
			form.target = 'formpopup';
		}
		</script>
	</head>
	
	<body>
		<div id="website">
			<header>
					<a href="index.html"><img src="img/header.jpg" /></a>
				<div id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="films.html">Films</a></li>
						<li><a href="acties.html">Acties</a></li>						
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</header>
			<div id="content">		
				<div id="rescon">
	  <?php
	  include('config.php');
	  $film = $_POST['movie'];
	  $codes = $_POST['codes'];
	  if ($codes != null)
		{
		$c_u = array_unique($codes);
		include('codes.php');
		}
	  $dt = $_POST['dt'];
	  $zid = $_POST['dt'];
	  $dtt = mysql_query("SELECT * FROM ids WHERE id = $dt");
	  $da = mysql_fetch_array($dtt);
	  $dt = $da['dt'];
	  $aStoel = $_POST['stoel'];
	  $zaal = $_POST['zaal'];
	  $N = count($aStoel);
	  $string = "";
	  $db = "";
		do{
		$rng = rand(1,100000);
		$check_primary = "SELECT * FROM data WHERE resNummer = $rng";
		$result_primary = mysql_query($check_primary);
		$count_primary = mysql_num_rows($result_primary);
		} while ($count_primary > 0);
		
		
		
		
			$sql="INSERT INTO data (resNummer, film, zaal, dt)
			VALUES
			('$rng','$film','$zaal','$dt')";
		mysql_query($sql);

		foreach ($aStoel as $selected) {
				$sql2 = "INSERT INTO rc (res_id, zaal_id, chairnr)
							VALUES ('$rng', '$zid', '$selected')";
				mysql_query($sql2);
			}
			

		if ($zaal == 4)
			$zaalnr = 3;
		else
			$zaalnr = zaal;
		echo'<img src="img/ideal.png" id="ideal">';
		echo('U heeft de volgende stoelen gereserveerd voor ' . $film . ' op ' . $dt . ' in zaal ' . $zaalnr . ': ');
		foreach ($aStoel as $selected) {
				$s_q = "SELECT * FROM `stoelen` WHERE `stoelnr` = '" . $selected . "'";
				$s_id = mysql_query($s_q);
				$s_a = mysql_fetch_array($s_id);
				$id = $s_a['cat_id'];
				echo '<span id = "seat' . $id . '">' . $selected . "</span> ";
				}	
		echo '<br /><br />';

		if ($passes > 0)
			echo 'U heeft aangegeven in het bezit te zijn van bioscooppassen. De totaalprijs is daarom aangepast.<br/><br/>';
		
		if ($zaal != 4)
		{
		$total = 0;	
		for ($i = 1; $i < 4; $i++)
		{
			if ($i == 1)
				$cat = 'lichtblauwe';
			else if ($i == 2)
				$cat = 'oranje';
			else
				$cat = 'donkerblauwe';
			$ind_q = "SELECT SUM(price)
						FROM
							(
							SELECT *
							FROM (
									SELECT stoelen.stoelnr, stoelen.cat_id
									FROM stoelen
									INNER JOIN rc
									ON stoelen.stoelnr = rc.chairnr
									WHERE res_id = " . $rng . "
									) AS X
							INNER JOIN cat
							ON cat_id = id
							) AS Y
						WHERE id = " . $i;
			$ind_r = mysql_query($ind_q);
			$ind_s = mysql_fetch_array($ind_r);
			$ind_p = (double) $ind_s["SUM(price)"];
			$ppid = mysql_query("SELECT price FROM cat WHERE id = " . $i);
			$ppir = mysql_fetch_array($ppid);
			$price_id = (double) $ppir['price'];
			if ($ind_p != 0)
			{
			for($passes; $passes > 0; $passes--)
			{
				$ind_p = $ind_p - $price_id;
				if ($ind_p < 0)
				{
					$ind_p = 0;
					break;
				}
			}
			}
			echo 'De prijs voor de ' . $cat . ' categorie is: &#8364 ' . number_format($ind_p, 2, ',', '.');
			$total = $total + $ind_p;
			echo '<br/>';
		}
		}
		echo '<br/>';
		$tickets = "SELECT COUNT(`chairnr`) AS tickets FROM rc WHERE `res_id` = " . $rng;
		$tickets = mysql_query($tickets);
		$tickets = mysql_fetch_array($tickets);
		$tickets = (int) $tickets["tickets"];
		
		if ($zaal != 4)
		{
		echo "De totaalprijs van uw reservering is &#8364 " . number_format($total, 2, ',', '.') . ".";
		}
		if ($zaal == 4)
			{
			$total = $tickets * 23;
			echo("De totaalprijs is &#8364 " . number_format($total, 2, ',', '.') . ".");
			}			
		echo '<br />';
		echo("Uw reserveringsnummer is " . $rng . ".");
		echo '<br />';
		echo'
		<form action="ideal2.php" method="post" onsubmit="target_popup(this)">
		<input type="hidden" name = "movie" value = "' . $film .'">
		<input type="hidden" name = "res" value = "' . $rng .'">
		<input type="hidden" name = "aStoel" value = "' . $aStoel . '">
		<input type="hidden" name = "price" value = "' . $total . '">';
		if($total > 0)
		{
		echo '<input type="submit" value="Betalen" /></form><br /><br />';
		echo ' Als u er voor kiest om niet online te betalen, moet u de kaartjes aan de kassa afrekenen.';
		}
		mysql_close($con);	
		
?>
			</div>
			</div>
			<div id="sidebar"> 
				<div id="topten"><p>Top 5 Films:
					<ol>
					<li><a href="films/ted.html">Ted</a></li>
					<li><a href="films/possession.html">The Possession</a></li>
					<li><a href="films/bourne.html">The Bourne Legacy</a></li>
					<li><a href="films/dark-knight.html">The Dark Knight Rises</a></li>
					<li><a href="films/savages.html">Savages</a></li>
					</ol></p>
				</div>			
			</div>
			<footer>
				<p>&copy;2012 Filmpje.nl. Al rights reserved. - Realisation: TT</p>
			</footer>
		</div>
	</body>
</html>