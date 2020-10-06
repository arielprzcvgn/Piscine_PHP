<?PHP
function ft_is_sort($tab)
{
	$bat = $tab;
	sort($bat);
	if ($tab == $bat)
		return 1;
	return 0;
}
?>
