#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$tab = explode(' ', preg_replace("/ +/", " ", trim($str)));
	sort($tab);
	return ($tab);
}

$tab = array();
$i = 0;
while (++$i < $argc)
	$tab = array_merge($tab, ft_split($argv[$i]));
sort($tab);
$i = -1;
while ($tab[++$i])
	echo "$tab[$i]\n";
?>
