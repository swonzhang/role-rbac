<?php
declare(strict_types=1);

require '../vendor/autoload.php';
date_default_timezone_set('PRC');



use Rolerbac\Test;

$gg = new Test();

echo $gg->test();
?>