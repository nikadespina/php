<?php
function writeOutput($product,$kostos,$fpa){
   $teliko = $kostos + $fpa/100*$kostos;
    echo $product . ": Αρχική τιμή: ". $kostos . "&euro;Τελική τιμή: <b> ". $teliko . "&euro;</b><br>";
}
writeOutput("Τυρί",5,24);
writeOutput("Ρύζι",1,24);
writeOutput("Γάλα",0.95,24);
writeOutput("Καμπά",3,24);
?>