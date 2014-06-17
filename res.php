<table>
<?php
$c1 = '#16759e';
$c2 = 'orange';
$c3 = '#093244';
$value = 0;
$chairs = array('row1' => array(array($c1 => 22)),
		  		'row2' => array(array($c1 => 6), array($c2 => 12), array($c1 => 6)),
				'row3' => array(array($c1 => 5), array($c2 => 14), array($c1 => 5)),
				'row4' => array(array($c1 => 5), array($c2 => 14), array($c1 => 5)),
				'row5' => array(array($c1 => 4), array($c2 => 6), array($c3 => 4), array($c2 => 6), array($c1 => 4)),
				'row6' => array(array($c1 => 5), array($c2 => 5), array($c3 => 6), array($c2 => 5), array($c1 => 5)),
				'row7' => array(array($c1 => 5), array($c2 => 5), array($c3 => 8), array($c2 => 5), array($c1 => 5)),
				'row8' => array(array($c1 => 6), array($c2 => 5), array($c3 => 8), array($c2 => 5), array($c1 => 6)),
				'row9' => array(array($c1 => 5), array($c2 => 6), array($c3 => 8), array($c2 => 6), array($c1 => 5)),
				'row10' => array(array($c1 => 5), array($c2 => 6), array($c3 => 8), array($c2 => 6), array($c1 => 5)),
				'row11' => array(array($c1 => 6), array($c2 => 5), array($c3 => 8), array($c2 => 5), array($c1 => 6)),
				'row12' => array(array($c1 => 7), array($c2 => 4), array($c3 => 8), array($c2 => 4), array($c1 => 7)),
				'row13' => array(array($c1 => 7), array($c2 => 5), array($c3 => 4), array($c2 => 5), array($c1 => 7)),
				'row14' => array(array($c1 => 6), array($c2 => 14), array($c1 => 6)),
				'row15' => array(array($c1 => 7), array($c2 => 12), array($c1 => 7)),
				'row16' => array(array($c1 => 7), array($c2 => 10), array($c1 => 7)),
				'row17' => array(array($c1 => 9), array($c2 => 6), array($c1 => 9)),
				'row18' => array(array($c1 => 20)),
				'row19' => array(array($c1 => 16)),
				'row20' => array(array($c1 => 14)));

foreach($chairs as $row) {
	echo '<div style="margin: auto;">';
	echo '<table cellpadding="2" align="center">';
	echo '<tr>';
	foreach($row as $section) {
		foreach($section as $color => $chair) {
			for($i = 0; $i < $chair; $i++)
			{
				$value++;
				?>
				<td bgcolor="<?=$color;?>">
				<?php 
				echo '<input type="checkbox" name="stoel[]" value="C' . str_pad($value, 3, 0, STR_PAD_LEFT) . '">';
				echo '</td>';				
			}
		}
	}
	echo '</tr>';
	echo '</table>';
}