<?php

if ( isset($argv[1]) and isset($argv[2]) and isset($argv[3]) ) {
	$op = $argv[1];
	$a  = $argv[2];
	$b  = $argv[3];
	if (      $op == "+") {
		$c = $a + $b; 
	} elseif ($op == "-") {
		$c = $a - $b;
	}
}
echo ($c);
