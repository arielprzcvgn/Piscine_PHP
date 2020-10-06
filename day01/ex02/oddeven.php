#!/usr/bin/php
<?php
while (1)
{	
	echo"Entrez un nombre: ";
	$nbr=(fgets(STDIN));
	if (! $nbr)
	{
		echo "\n";
		exit;
	}
	$nbr = trim($nbr);
	if (is_numeric($nbr))
	{
		if ($nbr[strlen($nbr) - 1] % 2 == 0)
			echo "Le chiffre $nbr est Pair\n";
		else
			echo "Le chiffre $nbr est Impair\n";
	}
	else
		echo "'$nbr' n'est pas un chiffre\n";
}
?>
