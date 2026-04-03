<?php
$numbers = array(2,10,8,6);
sort($numbers);
for($i=0; $i<4; $i++)
	echo $numbers[$i]."<br>";

$products = array();

$products["Βιβλίο"]=12;
$products["Στυλό"]=0.8;
$products["Μπλοκ"]=1.5;
$products["Συρρραπτικό"]=5;
echo "------------------<br>";
asort($products);
foreach($products as $k => $v){
	print "key = " . $k . "Value = " . $v . "<br>";
}
?>