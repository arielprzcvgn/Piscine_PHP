#!/usr/bin/php
<?PHP
if ($argc == 1)
	exit;
$tab = explode(' ', preg_replace("/ +/", " ", trim($argv[1])));
$i = 0;
while ($tab[++$i])
	echo "$tab[$i] ";
echo "$tab[0]\n";
?>
