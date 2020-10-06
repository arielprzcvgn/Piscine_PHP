#!/usr/bin/php
<?PHP
echo preg_replace("/[ \t]+/", " ", trim($argv[1]));
if ($argc > 1)
	echo "\n";
?>
