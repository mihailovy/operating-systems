<?php

echo ("a = 123\n");
echo ("b = 123\n");
$result = exec("php process-2.php + 123 321");
echo ("Result = ".$result."\n");
