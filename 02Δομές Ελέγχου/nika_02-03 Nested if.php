<html>
<body>
<?php
$month=date("F");
$day=date("I");
$time=date("H:i");

if(($month == "March") && ($day == "Monday") && ($time > "17:30")){
      
	  echo "To μάθημα είναι γλώσσα PHP";
	  }else{
	  echo "out of condition";
}
?>
</body>
</html>