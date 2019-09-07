<?php
 
echo "<p>\n";
 
$counter = 1;
while ($counter < 10){
  echo 'abc ';
  $counter++;
}
 
echo "</p>\n";
echo "<p>\n";
 
$counter = 1;
do{
  echo 'xyz ';
  $counter++;
} while ($counter < 10) ;
 
echo "</p>\n";
 
for ($x=1; $x<10; $x++){
  echo "$x ";
}
 
echo "\n<ol>";
for ($x='A'; $x<'G'; $x++){
  echo "<li>Item $x</li>\n";
  }
echo "\n</ol>";

 
?>