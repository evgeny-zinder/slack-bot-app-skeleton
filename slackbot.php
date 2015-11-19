<?php

require 'vendor/autoload.php';

use \mybot\Application;

$app = new Application($argv);
$app->bootstrap();
$app->run();