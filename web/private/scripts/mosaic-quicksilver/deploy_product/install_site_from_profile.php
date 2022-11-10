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
    echo "**************************";
    echo "Drush: Standard Profile installed";

    // Enable the mosaic_post_deploy module for future update handling, this
    // probably should be added to the install profile
    passthru('drush en mosaic_post_deploy -y');
    echo "**************************";
    echo "Drush: Mosaic Post Deploy Module Enabled";

    echo "**************************";
    echo "DONE: Finished installing site using the standard drupal profile.";
}
