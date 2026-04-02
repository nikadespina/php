<html>
<body>
<?php
echo "<h1>Πίνακας πολλαπλασιασμόυ</h1>";
echo "<table border=2 width=50%>";
for($i = 1; $i <= 9; $i++ ){
echo "<tr>";
echo "<td>".$i."a"."</td>";

for($j = 2; $j <= 9; $j++){
echo "<td>".$i*$j."</td>";
}
echo "</tr>";

}
echo "</table>";
?>
</body>
</html>