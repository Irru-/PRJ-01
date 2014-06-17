<!doctype html>
<html>
	<head>
		<title>Filmpje</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script src = "js/seats.js" type="text/javascript"></script>
		<script type="text/javascript">
		function isNumberKey(evt)
			  {
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;
		 
				 return true;
			  }
		</script>
	</head>
	
	<body>
	<?php
	$movie = $_POST['movie'];
	$test = $_POST['test'];
	?>
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
			<?php
				echo "<h2 id=\"titelres\">" . $movie . "</h2>";
				echo '<br />';
				echo '<br />';
				if ($test < 4)
					echo '<div id="legenda"><img src="img/legenda.png"></div>';
			?>
			<form method="post" action="reserved.php">
			<input type = "hidden" name = "movie" value = "<?php
			echo $_POST['movie'];
			?>">
			<input type = "hidden" name = "dt" value = "<?php
			echo $_POST['dt'];
			?>">
			<input type = "hidden" name = "zaal" value = "<?php
			echo $_POST['test'];
			?>">
			<div id="zalen">			
			<?php
			if($test == 1)
			{
			include('resA.php');
			}
			else if($test == 2)
			{
			include('resB.php');
			}
			else if($test == 3)
			{
			include('resC.php');
			}
			else if($test == 4)
			{
			include('resC.php');
			}
			?>
			<br/>
			<div id="rescon">
			<? if($test < 4)
			{
			?>
			Bent u in het bezit van een Unlimited Card, of een 100 Days Card, vul dan uw pasnummer hier in.
					De goedkoopste tickets zullen dan van de prijs worden afgehaald.
			<table id = "tcodes" border="0">
			<?php
			$var = 0;
			for ($i = 0; $i < 5; $i++)
			{
				$var++;
				echo '<tr>';
				echo '<td>';
				echo 'Pasnummer' . $var . ':';
				echo '</td>';
				echo '<td>';
				echo '<input name="codes[]" maxlength="5" onkeypress="return isNumberKey(event)">';
				echo '</td>';
				echo '<td>';
				$var2 = 5 + $var;
				echo 'Pasnummer' . $var2 . ':';
				echo '</td>';
				echo '<td>';
				echo '<input name="codes[]" maxlength="5" onkeypress="return isNumberKey(event)">';
				echo '</td>';
				echo '</tr>';	
			}
			?>
			</table>
			<? } ?>
			</div>
			</div>
			<div id="buttonvolgende"><input type="submit" value="Volgende &raquo;" onclick="return check()"></div>
		</form>

		 </div>
			<div id="sidebarres"> 
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