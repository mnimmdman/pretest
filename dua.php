<?php  
// $prima= 7;
function Prima($prima){
	if ($prima <= 0 || $prima >= 26) {
		echo "prima Keliru";
	}else{
		for ($i=1; $i <= 100 ; $i++) { 
			$t = 0;

			for ($x=1; $x <= $i ; $x++) { 
				if ($i % $x == 0) {
					$t++;
				}
			}
			if ($t==2) {
				$bil[] = $i;
			}
		}
		for ($i=0; $i < $prima ; $i++) { 
			for ($x=0; $x <= $i ; $x++) { 
				echo $bil[$x];
			}
			echo "</br>";
		}
	}
}

Prima(5);

?>