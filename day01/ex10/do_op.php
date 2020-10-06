#!/usr/bin/php
<?PHP
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	exit;
}
if (trim($argv[2]) == "+")
	$nbr = trim($argv[1]) + trim($argv[3]);
elseif (trim($argv[2]) == "-")
	$nbr = trim($argv[1]) - trim($argv[3]);
elseif (trim($argv[2]) == "*")
	$nbr = trim($argv[1]) * trim($argv[3]);
elseif (trim($argv[2]) == "/")
	$nbr = trim($argv[1]) / trim($argv[3]);
elseif (trim($argv[2]) == "%")
	$nbr = trim($argv[1]) % trim($argv[3]);
echo "$nbr\n";
?>
