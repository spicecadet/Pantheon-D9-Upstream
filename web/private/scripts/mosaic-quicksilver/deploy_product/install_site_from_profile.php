<?php

//Only try to run this if we are on a pantheon environment
if (isset($_ENV['PANTHEON_ENVIRONMENT'])) {
    
    echo "START: Installing site using the standard drupal profile.";
    
    // Variables to use for site installation
    $db_url = 'mysql://' . $_SERVER['DB_USER'] . ':' . $_SERVER['DB_PASSWORD'] . '@' . $_SERVER['DB_HOST'] . '/' . $_SERVER['DB_NAME'];
    $profile_name = 'standard';
    $site_name = $_SERVER['PANTHEON_SITE_NAME'];

    // Install the site using the "standard" drupal profile
    $drush_cmd = "drush site-install " . $profile_name . " --db-url='" . $db_url . "' --site-name=" . $site_name;
    passthru($drush_cmd);

    // Enable the mosaic_post_deploy module for future update handling, this
    // probably should be added to the install profile
    passthru('drush en mosaic_post_deploy -y');

    echo "DONE: Finished installing site using the standard drupal profile.";
}
