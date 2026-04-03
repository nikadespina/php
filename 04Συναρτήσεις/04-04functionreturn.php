<?php
function getPerimeter($length,$width){
$perimeter = 2*($length + $width);
return $perimeter;

}
echo "The perimeter of a rectangle of length 4 units and width 2 is: " .getPerimeter(4,2). "units";

?>