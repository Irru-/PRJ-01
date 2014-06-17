<html>
<head>
<title>iDeal - De beste manier om online te betalen</title>
<script src = "js/ideal.js" type="text/javascript"></script>
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
<?
$price = $_POST['price'];
$res = $_POST['res'];
?>

<img src="img/ideal.png" id="ideal"><br/><br/>
<?
$rng = rand(100000,999999);
?>
Totaalbedrag: &#8364 <?echo number_format($price, 2, ',', '.');?><br/>
Vul aub de bijbehorende TAN-code in om de betaling te voltooien.<br/><br/>
<table id = "tcodes" border="0">
<tr>
<td><?echo $rng;?>:</td>
<form method = "post" action = "ideal4.php">
<td><input type = "text" id = "tan" onkeypress="return isNumberKey(event)" maxlength = "6" size = "6"></td>
</tr>
</table>
<input type = "hidden" name = "res" value = <?echo $res;?>>
<input type = "submit" value = "Ga Verder" onclick="return notEmptyTwo('tan','Vul uw TAN-code in aub.')">
</form>