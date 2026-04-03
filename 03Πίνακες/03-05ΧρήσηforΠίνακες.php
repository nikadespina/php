<?php
$start = 1;
$times = 2;
$answer = array();

for($start; $start<6; $start++){
    $answer[$start] = $start * $times;
}

var_dump($answer);

echo "<br><br>";
for($start=1; $start<6;$start++){
	echo $answer[$start];
	echo "<br>";
}
?>