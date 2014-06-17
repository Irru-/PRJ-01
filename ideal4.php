<html>
<head>
<title>iDeal - De beste manier om online te betalen</title>
</head>
<body onUnload="opener.location='index.html';">

<?
$res = $_POST['res'];
?>

<img src="img/ideal.png" id="ideal"><br/><br/>
De betaling is compleet. Dankuwel voor het gebruik van iDeal. U wordt automatisch naar de home-page teruggebracht als u dit venster sluit.<br/><br/>
Uw reserveringsnummer is : <?echo $res;?><br/>
<input type = "button" value = "Klik hier om dit venster te sluiten" onclick = "window.close()">
