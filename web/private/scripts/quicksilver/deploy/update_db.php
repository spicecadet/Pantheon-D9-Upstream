<?php
// Update the database to run update hooks.
echo "Running updatedb\n";
passthru('drush updatedb -y');
echo "Update db complete.\n";

//Clear all cache
echo "Rebuilding cache.\n";
passthru('drush cr');
echo "Rebuilding cache complete.\n";