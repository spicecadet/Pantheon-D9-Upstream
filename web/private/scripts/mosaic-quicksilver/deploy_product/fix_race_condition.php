<?php
 
/**
 * This file left intentionally empty.  Its just here as a temporary workaround for the problem
 * on the deploy_product "after" stage whereby scripts are started before the container is ready
 */
$time = 120;
 sleep($time);
 echo "Waking up after " . $time . " seconds";