<?php

//Only try to run this if we are on a pantheon environment
if (isset($_ENV['PANTHEON_ENVIRONMENT'])) {
    
    echo "START: Installing site using the standard drupal profile.";
    
    // Variables to use for site installation
    $profile_name = 'standard';
    $site_name = $_SERVER['PANTHEON_SITE_NAME'];

    // Install the site using the "standard" drupal profile
    $drush_cmd = "drush site-install " . $profile_name . " --account-pass=admin" . " --site-name=" . $site_name . "  -y";
    passthru($drush_cmd);
    echo "**************************" . PHP_EOL;
    echo "Drush: Standard Profile installed" . PHP_EOL;

    // Enable the Webform Module
    passthru('drush pm-enable webform -y');
    echo "**************************" . PHP_EOL;
    echo "Drush: Webform Module Enabled" . PHP_EOL;

    passthru('drush pm-enable ds -y');
    echo "**************************" . PHP_EOL;
    echo "Drush: Display Suite Module Enabled" . PHP_EOL;

    passthru('drush pm-enable admin_toolbar -y');
    echo "**************************" . PHP_EOL;
    echo "Drush: Admin Toolbar Module Enabled" . PHP_EOL;

    passthru('drush pm-enable pathauto -y');
    echo "**************************" . PHP_EOL;
    echo "Drush: Pathauto Module Enabled" . PHP_EOL;

    echo "**************************" . PHP_EOL;
    echo "DONE: Finished installing site using the standard drupal profile.";
}

