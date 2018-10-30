<!DOCTYPE html>
<html>
<head>
	<title>TekOtek</title>
</head>
<body>
	<?php
	echo "<font face='Helvetica'>Tekotek anak ayam turun 100</font> <br>";
	$tekotekotek = 99;
	for ($a=$tekotekotek;$a > 0; $a--) {
		if($a % 2 == 0){
			echo '<p style="color:orange;font-family: Helvetica;">'."Mati satu tinggal $a"; echo '</p>';
		}else{
		echo '<p style="color:brown;font-family:Helvetica;">'."Mati satu tinggal $a"; echo "</p>";
			}

		}

	?>
</body>
</html>