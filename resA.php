<?php
include('config.php');
$zid = $_POST['dt'];
$query = "SELECT * FROM rc WHERE zaal_id = $zid"; 
	 
$result = mysql_query($query);
$rchairs = array();

while($row = mysql_fetch_array($result)){
	array_push($rchairs, $row['chairnr']);
}

$c1 = '#16759e';
$c2 = 'orange';
$c3 = '#093244';
$value = 0;
$chairs = array('row1' => array(array($c1 => 8)),
		  		'row2' => array(array($c1 => 10)),
				'row3' => array(array($c1 => 10)),
				'row4' => array(array($c1 => 5), array($c2 => 2), array($c1 => 5)),
				'row5' => array(array($c1 => 4), array($c2 => 4), array($c1 => 4)),
				'row6' => array(array($c1 => 3), array($c2 => 2), array($c3 => 2), array($c2 => 2), array($c1 => 3)),
				'row7' => array(array($c1 => 3), array($c2 => 2), array($c3 => 2), array($c2 => 2), array($c1 => 3)),
				'row8' => array(array($c1 => 3), array($c2 => 2), array($c3 => 2), array($c2 => 2), array($c1 => 3)),
				'row9' => array(array($c1 => 4), array($c2 => 4), array($c1 => 4)),
				'row10' => array(array($c1 => 5), array($c2 => 2), array($c1 => 5)),
				'row11' => array(array($c1 => 10)),
				'row12' => array(array($c1 => 10)),
				'row13' => array(array($c1 => 8)));
				
foreach($chairs as $row) {
	echo '<div style="margin: auto;">';
	echo '<table id="tableres">';
	echo '<tr>';
	foreach($row as $section) {
		foreach($section as $color => $chair) {
			for($i = 0; $i < $chair; $i++)
			{
				$value++;
				$valtrue = "A" . str_pad($value, 3, 0, STR_PAD_LEFT);
				if (in_array($valtrue,$rchairs))
				{
					echo '<td bgcolor="red">';
					echo '<input type="checkbox" name="stoel[]" value="' . $valtrue . '" disabled>';
				}
				else
				{
					echo '<td bgcolor="' . $color . '">';
					echo '<input type="checkbox" name="stoel[]" value="' . $valtrue . '">';
				}
				echo '</td>';
			}
		}
	}
}

	echo '<tr>
            <th></th>
            <td colspan="12">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="12" class="scherm">SCHERM</td>
    </tr>';
	echo '</table>';
	echo '</div>';
