<?php

echo "<pre>";

echo "PDO Loaded: ";
var_dump(extension_loaded('pdo_mysql'));

echo "\nMySQLi Loaded: ";
var_dump(extension_loaded('mysqli'));

echo "</pre>";

exit;
