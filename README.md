# php
ΤΕΠΒ-Ασκήσεις και Παραδείγματα.php 
[nika_02-01Άσκηση if.php](https://github.com/user-attachments/files/26450326/nika_02-01.if.php)
<html>
<body>

<?php
$t = date("H");
echo "<p>Η ώρα στον Server είναι:".$t;
echo",οπότε παράγεται το αποτέλεσμα:</p>";

if($t<"10"){
echo "Καλημέρα!";
}else if($t<"20"){
echo "Να έχετε καλή ημέρα!";
}else{
echo"Καλό βράδυ!";
}
?>
</body>
</html>
