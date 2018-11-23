<?php

$start_time = microtime(true); // start timer
require_once('afr-lib/include/set_env.inc'); /** load AFR application */
$app->name = 'gallery';
$output = site_application($app);
echo($output);
$time = elapsed($start_time);

print_log("Application {$app->name} loaded in {$time}s", 'app', LOG_LEVEL_ALWAYS);
//print_log("Application {$app->name} loaded in {$time}", 'app', LOG_LEVEL_TEST);
