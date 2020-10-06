#!/usr/bin/php
<?PHP
function cmp($a, $b)
{
	$order = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789";
	$k = 0;
	while ($a[$k] && $b[$k])
	{
		$avalue = 62;
		$i = -1;
		while (($order[++$i] || $order[$i] == "0") && $avalue == 62)
			$avalue = ($order[$i] == $a[$k] ? $i : 62);
		$bvalue = 62;
		$i = -1;
		while (($order[++$i] || $order[$i] == "0") && $bvalue == 62)
			$bvalue = ($order[$i] == $b[$k] ? $i : 62);
		if ($avalue == 62 && $bvalue == 62 && $a[$k] != $b[$k])
			return strcmp ($a, $b);
		elseif ($avalue == $bvalue)
			;
		else
			return $avalue - $bvalue;
		$k++;
	}
	return strcmp ($a, $b);
}

function ft_split($str)
{
	return explode(' ', preg_replace("/ +/", " ", trim($str)));
}

$tab = array();
$i = 0;
while (++$i < $argc)
	$tab = array_merge($tab, ft_split($argv[$i]));
usort($tab, 'cmp');
$i = -1;
while ($tab[++$i])
	echo "$tab[$i]\n";
?>
