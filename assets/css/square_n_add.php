<?php
function squaresum($number)
{ $i=0;
  foreach ($number as $value) {
  	echo $value[$i];
  	$i++;
  }
}
echo squaresum([1,2,5]);