<html>
<body>
<?php
$numbers = array (1,4,5,-8,40,51,7,8,9,21);

function check($num){
if ($num % 2 == 0)
return "Άρτιος";
else
return "Περιττός";
}
echo "<table border=1>";
for($i=0; $i<10; $i++){
echo "<tr><td>" . $numbers[$i] . "</td><td>" . check($numbers[$i]) . "</td></tr>";
}
echo "</table>"
?>
</body>
</html>