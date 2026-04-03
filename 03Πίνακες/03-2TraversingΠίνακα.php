<?php
$pin=array("Joe","Nick",5,"Mary");

$round = count($pin);

echo "<br>"."Looping using for: "."<br>";
for($n=0; $n< $round; $n++){
	echo $pin[$n],"<br>";
}
?>