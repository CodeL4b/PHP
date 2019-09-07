<?php 

require ('vendor/autoload.php');


use Nahid\Test;
use Nahid\Hello\Art;


$tst = new Test();
$tst->welcome();
$tst->done();


$art = new Art;
$art->done();