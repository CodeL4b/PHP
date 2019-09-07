<?php
 
$currMonth=date('F', time());
if ($currMonth == 'May'){
  echo "<p>It's May, so it's really hot.</p>";
}else{
  echo "<p>Not May, so at least not in the peak of the heat.</p>";
}
 
?>