#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$tab = explode(' ', trim($str));
	$tab2 = array();
	foreach ($tab as $elem)
	{
		if (strlen($elem))
			$tab2[] = $elem;
	}
	sort($tab2);
	return ($tab2);
}
?>
