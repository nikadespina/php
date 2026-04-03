<?php
$emp = array
   (
   array(1,"Paul:",400000),
   array(2,"John:",500000),
   array(1,"Mary:",300000),
   );
   
for ($row = 0; $row < 3; $row++){
	for ($col = 0; $col < 3; $col++){
		echo $emp[$row][$col]." ";
	}
   
echo "<br>";
}
?>