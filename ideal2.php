<html>
<head>
<title>iDeal - De beste manier om online te betalen</title>
<script src = "js/ideal.js" type="text/javascript"></script>
</head>
<body>
<?
$price = $_POST['price'];
$res = $_POST['res'];
?>

<img src="img/ideal.png" id="ideal"><br/><br/>
<form method="post" action="ideal3.php">
Welkom bij iDeal. Log aub in om de betaling te voltooien.<br/><br />

<table id = "tcodes" border="0">
<tr>
<td>Gebruikersnaam:</td>
<td><input id = "user" type = "text"></td>
</tr>
<tr>
<td>Wachtwoord:</td>
<td><input id = "pw" type = "password"</td>
</tr>
</table> 
<input type = "hidden" name = "price" value = <?echo $price;?>>
<input type = "hidden" name = "res" value = <?echo $res;?>>
<input type = "submit" value = "Ga Verder" onclick="return notEmpty('user','pw','Vul beide velden in aub.')">
</form>