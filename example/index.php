<?php
require '../vendor/autoload.php';

use Fcosrno\Fica;

$fica = new Fica(2000);
echo "Medicare is ".$fica->getMedicare();
echo "<br>";
echo "Social Security is ".$fica->getSocialSecurity();
echo "<br>";
echo "Fica is ".$fica->getFica();
