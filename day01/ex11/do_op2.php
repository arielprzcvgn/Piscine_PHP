#!/usr/bin/php
<?PHP
if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit;
}
$tab = explode(" ", $argv[1]);
$argv[1] = implode("", $tab);
$tab = explode("	", $argv[1]);
$argv[1] = implode("", $tab);
$nbr1 = floatval($argv[1]);
$plus = ($argv[1][0] == "+" ? 1 : 0);
$length1 = strlen($nbr1) + $plus;
$op = $argv[1][$length1];
$nbr2 = floatval(substr($argv[1], $length1 + 1, strlen($argv[1])));
if (!is_numeric($nbr1) || !is_numeric($nbr2) || !is_numeric(substr($argv[1], $length1 + 1, strlen($argv[1]))) || ! is_numeric(substr($argv[1], 0, $length1)))
	Echo "Syntax Error\n";
elseif ($op == "+")
	echo ($nbr1 + $nbr2)."\n";
elseif ($op == "-")
	echo ($nbr1 - $nbr2)."\n";
elseif ($op == "*")
	echo ($nbr1 * $nbr2)."\n";
elseif ($op == "/")
	echo ($nbr1 / $nbr2)."\n";
elseif ($op == "%")
	echo ($nbr1 % $nbr2)."\n";
else
	echo "Syntax Error\n";
?>
