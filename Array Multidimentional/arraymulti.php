<?php
$multiCity=array(
    array('City', 'Country', 'Continent'),
    array('Tokyo', 'Japan', 'Asia'),
    array('Mexico City','Mexico', 'North America'),
    array('New York City', 'USA', 'North America'),
    array('Mumbai', 'India', 'Asia'),
    array('Seoul', 'Korea', 'Asia'),
    array('Shanghai', 'China', 'Asia'),
    array('Lagos', 'Nigeria', 'Africa'),
    array('Buenos Aires', 'Argentina', 'South America'),
    array('Cairo', 'Egypt', 'Africa'),
    array('London', 'UK','Europe')
);
?>
 

<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<title>Multi-dimensional Array</title>
<style type="text/css">
td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
th {text-align:center;}
table {border-collapse: collapse; border: 1px solid black;}
</style>
</head>
 
<body>
<h2>City Table<br /></h2>
 
<table>
<thead>
<tr>
<th>
<?php
echo $multiCity[0][0] ."</th>\n<th>";
echo $multiCity[0][1] ."</th>\n<th>";
echo $multiCity[0][2] ."</th>\n";
?>
</tr>
</thead>
 
<?php

$num = count($multiCity); 

for ($row=1; $row<$num; $row++){
  echo "<tr>\n";
  foreach ($multiCity[$row] as $value){
    echo "<td>$value</td>\n";
    }
   echo "</tr>\n";  
}
?>