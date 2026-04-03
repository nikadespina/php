<?php
$products = array();

$products["Βιβλίο"]=12;
$products["Στυλό"]=0.8;
$products["Μπλοκ"]=1.5;
$products["Συρρραπτικό"]=5;

foreach($products as $Key_name => $key_value){
	print "key = " . $Key_name . "Value = " . $key_value . "<BR>";
}
?>