<!doctype html>
<html>
	<head>
		<title>Filmpje</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<META HTTP-EQUIV=Refresh CONTENT="15; URL=index.html">
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
				<div id="icontent">
					Bedankt voor uw reservering. We wensen u veel kijkplezier bij <?php echo $_POST['movie'];?>!<br />
					Uw reserveringsnummer is <?php echo $_POST['res'];?>. Onthoud dit nummer goed!<br />
					Klik <a href="index.html">hier</a> om terug te keren naar het hoofdmenu, of wacht 15 seconden.
				</div>
			</div>
			<div id="sidebar"> 
				<div id="topten"><p>Top 5 Films:
					<ol>
					<li><a href="ted.html">Ted</a></li>
					<li><a href="possession.html">The Possession</a></li>
					<li><a href="bourne.html">The Bourne Legacy</a></li>
					<li><a href="dark-knight.html">The Dark Knight Rises</a></li>
					<li><a href="savages.html">Savages</a></li>
					</ol></p>
				</div>			
			</div>
			<footer>
				<p>&copy;2012 Filmpje.nl. Al rights reserved. - Realisation: TT</p>
			</footer>
		</div>
	</body>
</html>