<html>
<body>
<?php
$age =23;
$nationality = "European";

if($nationality == "Greek"){
    if($age >= 18){
	echo "Έχεις δικαίωμα ψήφου";
	}else{
	   echo "Δεν έχεις δικαίωμα ψήφου";
	}
}else{
   echo"Η υπηκοότητα δεν είναι Ελληνική, δεν εφαρμόζονται οι κανόνες ψήφου.";
}


?>

</body>

</html>