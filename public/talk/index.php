<?php

$command = array_map('urldecode', explode('/', $_SERVER['REQUEST_URI']));

echo implode(' ', $command);

?>
