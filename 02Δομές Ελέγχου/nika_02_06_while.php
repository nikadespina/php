<html>
<head></head>
<body>
<body bgcolor=white>
Βαθμοί Celsius σε βαθμούς Kelvin και Fahrenheit<br>
<?php
$ctemp=-10;
while ($ctemp < 115){
	
print("$ctemp βαθμοί C ισούται ");
print(32+$ctemp / 5*9 );
print(" βαθμούς F και ");
print($ctemp + 273.1);
print("βαθμούς K<BR>");
$ctemp=$ctemp+20;



}


?>
</body>
</html>