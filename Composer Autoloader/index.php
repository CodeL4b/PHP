<?php

require ('vendor/autoload.php');

use Noyon\Test;
use Noyon\Hello\Art;



$test = new Test();
$test -> ask();
$test -> tnx();

$art = new Art();
$art -> tnx();

?>