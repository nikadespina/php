<!DOCTYPE html>
<html>
<head>
<style>
body{background:#f1f1c1};
</style>
</head>
<body>
<?php

	function diafora_Numbers($a,$b){
		$diafora=$a-$b;

		echo "Το αποτέλεσμα της αφαίρεσης είναι: "." ". $a." - ".$b." = " . $diafora ;

		return $diafora;
	}
	$result=diafora_Numbers(5,3);
         echo"<br>"."-----------------------------------------------------------------"
?>
</body>
</html>