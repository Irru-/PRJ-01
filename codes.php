<?
		$passes = 0;
		foreach ($c_u as $code) 
		{
				$s_q = "SELECT * FROM `pn` WHERE `pass_nr` = '" . $code . "'";
				$s_id = mysql_query($s_q);
				$s_a = mysql_fetch_array($s_id);
				$id = $s_a['pass_nr'];
				if($code == $id && $code != null)
					$passes++;
		}
?>