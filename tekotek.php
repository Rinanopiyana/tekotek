<!DOCTYPE html>
<html>
<head>
	<title>tekotek</title>
</head>
<body>
<?php
	for($f=100;$f>0;$f--){
		if($f==100){
			echo '<p style="font-family:"Helvetica";">'."Tekotek-kotek anak ayam turun $f".'<br></p>';
		}elseif(($f%2)==1){
			echo '<p style="color: orange; font-family: "Helvetica";">'."Mati Satu tinggal $f".'<br></p>';
		}else{
			echo '<p style="color: brown; font-family: "Helvetica";">'."Mati Satu tinggal $f".'<br></p>';
		}
	}
?>
</body>
</html>