<?php

// Shows the range of variables available in the current workflow for stage scripts to use

echo "Quicksilver vars available for current stage\n";
echo "POST:\n\n";
echo print_r($_POST, 1);
echo "ENV:\n\n";
echo print_r($_ENV, 1);
echo "SERVER:\n\n";
echo print_r($_SERVER, 1);
