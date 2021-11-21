<?php
header('Content-type: text/html; charset=utf-8');
include ("settings/bd.php");

function clear($var) {
		$var = trim($var);
        $var = strip_tags($var);
        $var = htmlentities($var, ENT_IGNORE, "UTF-8");
        $var = stripcslashes($var);
        $var = str_replace('ӏ','Ӏ',$var);
        $var = str_replace('І','Ӏ',$var);
        $var = str_replace('I','Ӏ',$var);
        $var = str_replace('1','Ӏ',$var);
        return $var;
        // return mysqli_real_escape_string($db, $var);
}

if (isset($_POST['word'])) {
	$word = clear($_POST['word']);
	// $query = "SELECT * FROM tezaurus WHERE word LIKE '$word'";
	$query = "SELECT * FROM tezaurus WHERE word='$word'";
	$result = mysqli_query($db,$query);
	
	if (mysqli_num_rows($result) > 0) {
		$mass = array();
		$i = 0;
		$j = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			$no_sinonim = False;
			$sinonimy_string = $row['sinonimy'];
			if (!empty($sinonimy_string)) {
				if (strpos($sinonimy_string, ',') != False) {
					$sinonimy_mass = explode(",", $sinonimy_string);
					
					foreach ($sinonimy_mass as $sinonim_id) {
						$sinonim_id = (int) $sinonim_id;
						$result_sinonimy = mysqli_query($db, "SELECT word, sinonimy FROM tezaurus WHERE id='$sinonim_id'");
						$row_sinonimy = mysqli_fetch_assoc($result_sinonimy);
						$mass[$i][] = $row_sinonimy;
					}
					
				}
				elseif (strpos($sinonimy_string, ',') == False) {
					$sinonim_id = (int) $sinonimy_string;
					$result_sinonimy = mysqli_query($db, "SELECT word, sinonimy FROM tezaurus WHERE id='$sinonim_id'");
					$row_sinonimy = mysqli_fetch_assoc($result_sinonimy);
					$mass[$i][] = $row_sinonimy;
				}
				
			}
			else $no_sinonim = True;
			
			$i++;
		}
		if ($no_sinonim) echo "no_sinonim";
		elseif (count($mass) > 0) {
			$mass = json_encode($mass);
			echo $mass;
		}
	}
	else echo "no_word";
	
}


		

?>